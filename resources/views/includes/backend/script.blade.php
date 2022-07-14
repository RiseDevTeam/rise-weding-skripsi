 <!--   Core JS Files   -->
 {{-- <script src="{{ asset('admin/js/wizard.js') }}"></script> --}}
 <script src="{{ asset('admin/js/core/popper.min.js') }}"></script>
 <script src="{{ asset('admin/js/core/bootstrap.min.js') }}"></script>
 <script src="{{ asset('admin/js/plugins/perfect-scrollbar.min.js') }}"></script>
 <script src="{{ asset('admin/js/plugins/smooth-scrollbar.min.js') }}"></script>

 <!--Import vanilla wizard here-->
 <script src="https://cdn.jsdelivr.net/npm/vanilla-wizard@0.0.5"></script>

 <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <script>
     var win = navigator.platform.indexOf('Win') > -1;
     if (win && document.querySelector('#sidenav-scrollbar')) {
         var options = {
             damping: '0.5'
         }
         Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
     }
 </script>
 <!-- Github buttons -->
 <script async defer src="https://buttons.github.io/buttons.js"></script>
