</section>
</div>
</div>
</div>

<!-- jQuery -->
<script src=<?= BASE_URL . "/library/jquery/jquery.js" ?>></script>
<!-- Bootstrap -->
<script src=<?= BASE_URL . "/library/bootstrap/js/bootstrap.min.js" ?>></script>
<!-- SlimScroll -->
<script src=<?= BASE_URL . "/library/jquery-slimscroll/jquery.slimscroll.min.js" ?>></script>
<!-- AdminLTE App -->
<script src=<?= BASE_URL . "/library/adminlte/js/adminlte.min.js" ?>></script>
<!-- data tables -->
<script src=<?= BASE_URL . "/library/datatables/jquery.dataTables.min.js" ?>></script>
<script src=<?= BASE_URL . "/library/datatables/dataTables.bootstrap.min.js"?>></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
