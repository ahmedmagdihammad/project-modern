<!-- jQuery -->
<script src="<?php echo $root; ?>assets/js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $root; ?>assets/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $root; ?>assets/js/adminlte.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="<?php echo $root; ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo $root; ?>assets/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo $root; ?>assets/js/dataTables.responsive.min.js"></script>
<script src="<?php echo $root; ?>assets/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo $root; ?>assets/js/dataTables.buttons.min.js"></script>
<script src="<?php echo $root; ?>assets/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo $root; ?>assets/js/buttons.html5.min.js"></script>
<script src="<?php echo $root; ?>assets/js/buttons.print.min.js"></script>
<script src="<?php echo $root; ?>assets/js/buttons.colVis.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $root; ?>assets/js/demo.js"></script>
<!-- Page specific script -->
<script src="<?php echo $root; ?>assets/js/a076d05399.js" crossorigin="anonymous"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>