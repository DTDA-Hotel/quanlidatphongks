<form action="<?php echo e(route("testing")); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <input accept="image/*" type="file" name="pimage" class="form-control">
    <input type="submit" value="Test Upload">
</form><?php /**PATH C:\Users\Admin\Documents\quanlidatphongks\resources\views/test.blade.php ENDPATH**/ ?>