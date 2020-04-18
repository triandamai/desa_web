    <?php $base = 'http://localhost/pd/ui/js/';?>
    <script src="<?= $base; ?>jquery.min.js"></script>
    <script src="<?= $base; ?>popper.min.js"></script>
    <script src="<?= $base; ?>bootstrap.min.js"></script>
    <script src="<?= $base; ?>app-style-switcher.js"></script>
    <script src="<?= $base; ?>feather.min.js"></script>
    <script src="<?= $base; ?>perfect-scrollbar.jquery.min.js"></script>
    <script src="<?= $base; ?>sidebarmenu.js"></script>

    <script src="<?= $base; ?>custom.min.js"></script>
  
    <script src="<?= $base; ?>d3.min.js"></script>
    <script src="<?= $base; ?>c3.min.js"></script>
    <script src="<?= $base; ?>chartist.min.js"></script>
    <script src="<?= $base; ?>chartist-plugin-tooltip.min.js"></script>
    <script src="<?= $base; ?>jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?= $base; ?>jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?= $base; ?>dashboard1.min.js"></script>
    <script src="<?= $base; ?>jquery.dataTables.min.js"></script>
    <script src="<?= $base; ?>datatable-basic.init.js"></script>
    <script type="text/javascript">
    $(document).on("click", "#ajukan", function() {
     
      $('input[name="nik"]').val($(this).data('nik'));
      $('input[name="simpan"]').val($(this).data('idpenduduk'));
     
    });
</script>