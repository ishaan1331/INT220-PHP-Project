<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
    <?php echo $__env->make("admin.admincss", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
  </head>
  <body>


    <div class="container-scroller">
        <?php echo $__env->make("admin.navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

        <form action="<?php echo e(url('/updatetouremployee' , $data->id)); ?>" method="Post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div>
                <label>Employee name</label>
                <input style="color: blue" ; type = "text" name = "name" value = "<?php echo e($data->name); ?>">
            </div>

            <div>
                <label>Employee position</label>
                <input style="color: blue" ; type = "text" name = "position" value = "<?php echo e($data->position); ?>">
            </div>


            <div>
                <label>Old Image</label>
               <img height="60%" width="60%" src="/employeeimage/<?php echo e($data->image); ?>">
            </div>

            <div>
                <label>New Image</label>
               <input type="file" name="image">
            </div>


            <div>

               <input style="color: blue" type="submit" value = "Update Chef" required>
            </div>

        </form>

    </div>


<?php echo $__env->make("admin.adminscript", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
  </body>
</html>
<?php /**PATH C:\Users\hp\Documents\Laravel\Tourism\resources\views/admin/updateemployee.blade.php ENDPATH**/ ?>