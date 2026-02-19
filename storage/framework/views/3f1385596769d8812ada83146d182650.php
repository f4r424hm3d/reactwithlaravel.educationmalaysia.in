<script>
  // DELETE ROW
  function deleteData(id) {
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: "<?php echo e(url('admin/' . $page_route . '/delete')); ?>" + "/" + id,
          success: function(data) {
            if (data.success == true) {
              $('#row'+id).remove();
              Swal.fire('Deleted!','Your record has been deleted.','success');
            }
          }
        });
      }
    });
  }
</script>
<?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\admin\js\delete-data.blade.php ENDPATH**/ ?>