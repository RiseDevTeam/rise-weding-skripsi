<?php

namespace App\Http\Controllers;

use App\Models\CashOut;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PembayaranInvitation;
use Illuminate\Support\Facades\Auth;

class CashOutController extends Controller
{
    public function index()
    {
        $cashOut = DB::table('cash_out_sementara')->leftjoin('pembayaran_invitation', 'cash_out_sementara.id_pembayaran', '=', 'pembayaran_invitation.id_pembayaran')
            ->leftjoin('pemesanan_invitation', 'cash_out_sementara.id_pemesanan', '=', 'pemesanan_invitation.id_pemesanan')
            ->leftjoin('template_invitation', 'template_invitation.id_template', '=', 'pemesanan_invitation.id_template')
            ->select(
                'cash_out_sementara.id_cash_out_sementara',
                'cash_out_sementara.id_pembayaran',
                'cash_out_sementara.total',
                'pemesanan_invitation.kategori_template',
                'pembayaran_invitation.status',
                'template_invitation.id_user',
                'template_invitation.gambar_cover',
            )
            // ->groupBy('cash_out_sementara.id_pembayaran')
            ->where('pembayaran_invitation.status', 'lunas')
            ->where('template_invitation.id_user', Auth::User()->id)
            ->get();
        return view('backend.admin.cash_out.cashout_mitra', compact('cashOut'));
    }

    public function proses_cash_out(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $tanggal = date('Y-m-d');
        foreach ($request->id_pembayaran as $key => $value) {
            CashOut::create([
                'id_pembayaran' => $value,
                'id_user' => $request->id_user,
                'tanggal_cashout' => $tanggal,
                'total' => $request->total_cashout[$key],
                'status' => 'pending',
            ]);
        }
        $bank = DB::table('bank_mitra')->where('id_user', Auth::User()->id)->first();
        if ($bank == Null) {
            DB::table('bank_mitra')->insert([
                'id_user' => $request->id_user,
                'nama_bank' => $request->nama_bank,
                'atas_nama' => $request->atas_nama,
                'nomor_rekening' => $request->nomor_rekening,
            ]);
        } elseif ($bank != Null) {
            DB::table('bank_mitra')->update([
                'id_user' => $request->id_user,
                'nama_bank' => $request->nama_bank,
                'atas_nama' => $request->atas_nama,
                'nomor_rekening' => $request->nomor_rekening,
            ]);
        }
        foreach ($request->id_cash_out_sementara as $key => $value) {
            DB::table('cash_out_sementara')->where('id_cash_out_sementara', $request->id_cash_out_sementara[$key])->delete();
            # code...
        }

        return redirect()->route('cashout-pembayaran')->with('cash_out', 'Mohon Menunggu balasan dari admin');
    }

    public function cashout_admin()
    {
        $cashOutAdmin = CashOut::leftjoin('bank_mitra', 'cash_out.id_user', '=', 'bank_mitra.id_user')->leftjoin('pembayaran_invitation', 'cash_out.id_pembayaran', '=', 'pembayaran_invitation.id_pembayaran')
            ->leftjoin('users', 'cash_out.id_user', '=', 'users.id')
            ->select(
                'cash_out.id_cash_out',
                'cash_out.id_user',
                'users.name',
            )->groupBy('users.id')
            ->get();
        // $pending = CashOut::where('status', 'pending')
        //                             ->where('id_user', $cash->id_user)
        //                             ->select(DB::raw('count(id_cash_out) as cash_out'))
        //                             ->first();
        // foreach ($cashOutAdmin as $key => $value) {

        // }
        // return view('backend.admin.cash_out.cashout_admin', compact('cashOutAdmin', 'pending'));
        return view('backend.admin.cash_out.cashout_admin', compact('cashOutAdmin'));
    }

    public function detail_cashout_admin($id)
    {
        $DetailcashOutAdmin = CashOut::leftjoin('bank_mitra', 'cash_out.id_user', '=', 'bank_mitra.id_user')->leftjoin('pembayaran_invitation', 'cash_out.id_pembayaran', '=', 'pembayaran_invitation.id_pembayaran')
            ->leftjoin('users', 'cash_out.id_user', '=', 'users.id')
            ->leftjoin('pemesanan_invitation', 'pemesanan_invitation.id_pemesanan', '=', 'pembayaran_invitation.id_pemesanan')
            ->leftjoin('detail_pemesanan_invitation', 'detail_pemesanan_invitation.id_pemesanan', '=', 'pemesanan_invitation.id_pemesanan')
            ->leftjoin('detail_pembayaran_invitation', 'detail_pembayaran_invitation.id_pembayaran', '=', 'pembayaran_invitation.id_pembayaran')
            ->leftjoin('template_invitation', 'template_invitation.id_template', '=', 'pemesanan_invitation.id_template')
            ->leftjoin('kategori_template', 'kategori_template.id_kategori_template', '=', 'template_invitation.id_kategori')
            ->select(
                'pembayaran_invitation.id_pembayaran',
                'detail_pembayaran_invitation.kode_transaksi',
                'pemesanan_invitation.kategori_template',
                'detail_pembayaran_invitation.total',
                'kategori_template.kategori',
                'bank_mitra.*',
                'users.name',
                'cash_out.id_user',
                'cash_out.status',
            )
            ->where('cash_out.id_user', $id)
            ->groupBy('cash_out.id_cash_out')
            ->get();
        return view('backend.admin.cash_out.detail_cashout_admin', compact('DetailcashOutAdmin'));
    }

    public function konfirmasi_cash_out_admin(Request $request, $id_user)
    {
        $request->validate([
            'bukti_cashout' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $bukti = $request->file('bukti_cashout');
        $bukti_nama = time() . '.' . $bukti->extension();
        $bukti->move(public_path('cash_out'), $bukti_nama);

        DB::table('cash_out')->where('id_user', $id_user)->update([
            'bukti_cashout' => $bukti_nama,
            'status' => 'konfirmasi',
        ]);
        return redirect()->route('cashout_admin')->with('cash_out_admin', 'Transaksi Sudah Selesai');
    }
}
