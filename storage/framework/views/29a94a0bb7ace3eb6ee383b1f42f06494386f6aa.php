<div class="color">
    <h1 class="popular ">Some of our most popular packages</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 card-padding " style="margin: 0px;">

      
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<form action="<?php echo e(url('/booktrip',$data->id)); ?>" method="post" style="padding: 0 ; margin: 0">
<?php echo csrf_field(); ?>
        <div class="col ">
            <div class="card h-100 ">
                
                    <img src="/packageimage/<?php echo e($data->image); ?>" class="card-img-top " alt="... ">
               
                <div class="card-body card-font">
                    <h5 class="card-title "><?php echo e($data->title); ?></h5>
                    <p class="card-text card-content-font "><?php echo e($data->description); ?></p><br>
                    <p>Price ( per person ) - <?php echo e($data->price); ?></p><br>
                    <input type="date" name="date" id = "date" required>
                    <input type ="number" name="quantity" min="1" value="1" style="width: 80px" required>
                    <input type="submit" value="Book Trip" >
                </div>
            </div>
        </div>

    </form>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



       
    </div>
</div>
<?php /**PATH C:\Users\hp\Documents\Laravel\Tourism\resources\views/popular.blade.php ENDPATH**/ ?>