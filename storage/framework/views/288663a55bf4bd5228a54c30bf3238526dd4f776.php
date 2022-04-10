<html>
    <head>
        <title>My Trips</title>
    </head>
<body>
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <title>Main-page</title>
        <meta charset="UTF-8">
    <base href="/public">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo e(asset('style.css')); ?>" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    </head>
    
    <body>
       
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top nav-custom">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Ishaan Travels </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                <div class="collapse navbar-collapse text-right" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo e('/'); ?>">Home</a>
                        </li>
    
                        <li class="nav-item">
                            
                                <?php if(auth()->guard()->check()): ?>
                                <a href="<?php echo e(url('/mytrips' , Auth::user()->id)); ?>" class="nav-link active" aria-current="page">
                                    Booked Trips [<?php echo e($count); ?>]
                                    </a>
                         
                                <?php endif; ?>
    
                                <?php if(auth()->guard()->guest()): ?>
                                    Booked Trips
                                <?php endif; ?>
                            </a>
                        </li>
    
                        
    
    
    
                        <li  class="nav-item">
                            <?php if(Route::has('login')): ?>
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                <?php if(auth()->guard()->check()): ?>
                                   <li  class="nav-item">
    
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
    
                                    </li>
                                <?php else: ?>
                                    <li  class="nav-item">
                                        <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline nav-link">Log in</a>
                                    </li>
    
                                    <?php if(Route::has('register')): ?>
                                <li  class="nav-item">
                                    <a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline nav-link">Register</a>
                                </li>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                        </li>
    
                   
                    </ul>
                </div>
            </div>
        </nav>

        <div class = "main-para">
        <table align = "center" bgcolor = "yellow" style="inline">
            <tr>
                <th style = "padding:30px">Destinaton</th>
                <th style = "padding:30px">Price(per person)</th>
                <th style = "padding:30px">No of People</th>
                <th style = "padding:30px">Total price</th>
                <th style = "padding:30px">Date</th> 
                
            </tr>
            
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td style = "padding:10px ; align-content: center"><?php echo e($data->title); ?></td>
            <td style = "padding:10px ; align-content: center"><?php echo e($data->price); ?></td>
            <td style = "padding:10px ; align-content: center"><?php echo e($data->quantity); ?></td>
            <td style = "padding:10px ; align-content: center"><?php echo e($data->quantity*$data->price); ?></td>
            <td style = "padding:10px ; align-content: center"><?php echo e($data->date); ?></td>
            
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            
            
               

        </table>

    </div>
    
</body>
</html><?php /**PATH C:\Users\hp\Documents\Laravel\Tourism\resources\views/mytrips.blade.php ENDPATH**/ ?>