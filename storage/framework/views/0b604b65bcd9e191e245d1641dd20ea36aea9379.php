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
    <?php echo $__env->make("admin.admincss", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
  </head>
  <body>


    <div class="container-scroller">
        <?php echo $__env->make("admin.navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;


        <div style="position: relative ; top: 60px ; right: -150px;">
            <form action="<?php echo e(url('/uploadpackage')); ?>" method="post" enctype="multipart/form-data">

                <?php echo csrf_field(); ?>


                <div>
                   <label>Title</label>
                   <input style="color: blue" type = "text" name = "title" placeholder="Write a title" required>
                </div>

                <div>
                    <label>Image</label>
                    <input style="color: blue" type = "file" name = "image"  required>
                 </div>

                 <div>
                    <label>Description</label>
                    <input style="color: blue" type = "text" name = "description" placeholder="Write a description" required>
                 </div>

                 <div>
                    <label>Price</label>
                    <input style="color: blue" type = "number" name = "price" placeholder="Write price" required>
                 </div>

                 <div>
                    <input style="color: black ; background-color: white" type = "submit" value = "save" >
                 </div>

            </form>


        </div>

    <div style = "position: relative;margin-top: 300px ; margin-right: 100px ; margin-left:-140px" >
        <div>
        <table bgcolor = "black">
        <tr >
            <th style="padding: 30px">Package Name</th>
            <th style="padding: 30px">Image</th>
            <th style="padding: 30px">Description</th>
            <th style="padding: 30px">Price</th>
            <th style="padding: 30px">Action</th>
            <th style="padding: 30px">Action2</th>

        </tr>

        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr align="center">
            <td style="padding: 30px"><?php echo e($data->title); ?></td>
            <td style="padding: 0px"><img src="packageimage/<?php echo e($data->image); ?>" alt=""></td>
            <td style="padding: 30px"><?php echo e($data->description); ?></td>
            <td style="padding: 30px"><?php echo e($data->price); ?></td>
            <td style="padding: 30px"><a href="<?php echo e(url('/deletepackage' , $data->id)); ?>">Delete</a></td>
            <td style="padding: 30px"><a href="<?php echo e(url('/updatepackage' , $data->id)); ?>">Update</a></td>

        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </table>
</div>


        </div>


<?php echo $__env->make("admin.adminscript", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
  </body>
</html>
<?php /**PATH C:\Users\hp\Documents\Laravel\Tourism\resources\views/admin/packages.blade.php ENDPATH**/ ?>