<form method="post" action="<?php echo e(url('admin/' . $pageRoute . '/import')); ?>" id="import_csv" enctype="multipart/form-data">
  <?php echo csrf_field(); ?>
  <div class="row">
    <div class="form-group col-md-6 col-sm-12 mb-3">
      <label>Select Excel File</label>
      <input type="file" name="file" id="file" required class="form-control mb-2 mr-sm-2" />
    </div>
    <div class="form-group col-md-4 col-sm-12 mb-3">
      <label>&nbsp;&nbsp;</label>
      <button style="margin-top:28px" type="submit" name="import_csv" class="btn btn-sm btn-info"
        id="import_csv_btn">Import</button>
      <a download href="<?php echo e(storage_url('format/' . $fileName . '.xlsx')); ?>" style="margin-top:28px"
        class="btn btn-sm btn-primary">Formate</a>
    </div>
  </div>
</form>
<?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\components\import-form.blade.php ENDPATH**/ ?>