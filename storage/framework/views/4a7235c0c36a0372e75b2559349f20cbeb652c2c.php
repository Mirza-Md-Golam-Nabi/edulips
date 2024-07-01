<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'File Manager')); ?></title>

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/font-awesome/all.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendor/bootstrap/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendor/file-manager/css/file-manager.css')); ?>">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="position-relative col-md-12" id="fm-main-block">
            <div id="fm"></div>
            <p class="fixed-bottom text-center"><?php echo e(__('Double click to choose a file')); ?>.</p>
        </div>
    </div>
</div>

<!-- File manager -->
<script src="<?php echo e(asset('vendor/file-manager/js/file-manager.js')); ?>"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // set fm height
    document.getElementById('fm-main-block').setAttribute('style', 'height:' + window.innerHeight + 'px');
    var componentId = '<?php echo e(app('request')->input('componentId')); ?>';
    var propertyId = '<?php echo e(app('request')->input('propertyId')); ?>';

    // Add callback to file manager
    fm.$store.commit('fm/setFileCallBack', function(fileUrl) {
      window.opener.App[componentId].fmSetLink(propertyId, fileUrl);
      window.close();
    });
  });
</script>
</body>
</html>

<?php /**PATH /home/u499240142/domains/rest.edulips.com/public_html/resources/views/vendor/file-manager/fmButton.blade.php ENDPATH**/ ?>