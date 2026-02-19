<script>
  getData();

  function getData(page) {
    if (page) {
      page = page;
    } else {
      var page = '<?php echo e($page_no??1); ?>';
    }
    return new Promise(function(resolve, reject) {
      //$("#migrateBtn").text('Migrating...');
      setTimeout(() => {
        $.ajax({
          url: "<?php echo e(aurl($page_route . '/get-data')); ?>",
          method: "GET",
          data: {
            page: page,
          },
          success: function(data) {
            $("#trdata").html(data);
          }
        });
      });
    });
  }
</script><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\admin\js\common-get-data.blade.php ENDPATH**/ ?>