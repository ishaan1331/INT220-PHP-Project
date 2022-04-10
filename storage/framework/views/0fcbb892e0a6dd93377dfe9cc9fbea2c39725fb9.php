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

           <form action="<?php echo e(url('/uploademployee')); ?>" method="Post" enctype="multipart/form-data">

            <?php echo csrf_field(); ?>
               <div>
                   <label>Name</label>
                   <input style="color: blue"  type="text" name="name" placeholder="Enter name" required>
               </div>

               <div>
                <label>Position</label>
                <input style="color: blue"  type="text" name="position" placeholder="Enter position" required>
            </div>

            <div>
                <label>Image</label>
                <input type="file" name="image" placeholder="" required>
            </div>


            <div>

                <input style="color: white ; background-color: blue" type="submit" value="Save">
            </div>
           </form>

           <div style = "position: relative ; top: 60px ; right: -150px">
           <table>
            <tr>
                <th style="padding: 30px ; height: 100px ; width:100px;" >Name</th>
                <th style="padding: 30px ; height: 100px ; width:100px;">Position</th>
                <th style="height: 100px ; width:100px;">Image</th>
                <th style="padding: 30px ; height: 100px ; width:100px;">Action</th>
                <th style="padding: 30px ; height: 100px ; width:100px;">Action2</th>
            </tr>

            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr align="center">
                 <td style="padding: 30px;" ><?php echo e($data->name); ?></td>
                 <td style="padding: 30px ;"><?php echo e($data->position); ?></td>
                 <td style="padding: 0px ;"><img height="100px" width="100px" src="/employeeimage/<?php echo e($data->image); ?>"></td>
                 <td style="padding: 30px ;"><a href="<?php echo e(url('/updateemployee' , $data->id)); ?>">Update</a></td>
                 <td style="padding: 30px ;"><a href="<?php echo e(url('/deleteemployee' , $data->id)); ?>">Delete</a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>


        </table>

    </div>



<?php echo $__env->make("admin.adminscript", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
  </body>
</html>
<?php /**PATH C:\Users\hp\Documents\Laravel\Tourism\resources\views/admin/employee.blade.php ENDPATH**/ ?>