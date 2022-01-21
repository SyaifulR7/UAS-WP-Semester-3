    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright © 2021 All rights reserved</strong>
        <div class="float-right d-none d-sm-inline-block">
            <b> Dibuat dengan <i class="fa fa-heart text-danger"></i> di Bekasi Indonesia</b>
        </div>
    </footer>
    </div>
    <!-- ./wrapper -->
    
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo base_url(); ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/dist/js/adminlte.js"></script>
    <!-- Datatable App -->
    <script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $('#datatable').DataTable();
    </script>
    <script>
        setTimeout(function() {
            $('.alert').fadeOut('slow');
        }, 3000);
    </script>

    <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script>
        function remove_form(url) {
            event.preventDefault();
            // prevent form submit
            var linkURL = url;
            Swal.fire({
                title: 'wait dulu ges !',
                text: "yakin nih mau hapus ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Confirm'
            }).then((result) => {
                if (result.value) {
                    window.location.href = linkURL;
                } else {
                    swal({
                        title: "eh gak jadi",
                        icon: "success",
                    })
                }
            });
        }
    </script>
    <!-- End Main content -->
    </body>

    </html>