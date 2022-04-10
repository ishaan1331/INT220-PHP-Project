<!DOCTYPE html>
<html lang="en">

<head>
    <title>Main-page</title>
    <meta charset="UTF-8">

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
                                Booked Trips[<?php echo e($count); ?>]
                            </a>
                     
                            <?php endif; ?>

                            <?php if(auth()->guard()->guest()): ?>
                            <a href="/" class="nav-link active" aria-current="page">
                                Booked Trips[0]
                            </a>
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

    <!-- Another main div -->
    <img src="Assets\Main Page\bmain.jpg" alt="">

    <!-- Another content div -->
    <div class="main-para">
        Ishaan Travels has been founded with the vision of giving everyone the best kind and quality of tourism at a sustainable price . We have four categories of travel niches ranging from affordable to luxury prices . Do check them aout and let us knwo !!
    </div>

    <div id="carouselExampleInterval " class="carousel slide carousel-sizing carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active " data-bs-interval="5000">
                <img src="Assets\Main page\Carousel\chamarel_waterfalls_mauritius-wallpaper-960x540.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="Assets\Main page\Carousel\island_3-wallpaper-960x540.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item " data-bs-interval="5000">
                <img src="Assets\Main page\Carousel\river_bend-wallpaper-960x540.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item " data-bs-interval="5000">
                <img src="Assets\Main page\Carousel\beach_nature_7-wallpaper-960x540.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    </div>

<?php echo $__env->make("popular", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="main-para">

    </div>

    <div class="footer ">
        <a href="https://www.facebook.com/profile.php?id=100010351382510 "><i class="fab fa-facebook-f fa-2x custom fb "></i></a>
        <a href="https://www.instagram.com/ishxxn_b/ "><i class="fab fa-instagram fa-2x custom ig "></i></a>
        <a href="mailto:ishaanbillore13@gmail.com "><i class="far fa-envelope-open fa-2x custom mail "></i></a>
        <a href="https://www.linkedin.com/in/ishaanbillore/ "><i class="fab fa-linkedin-in fa-2x custom linkedin "></i></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous "></script>

</body>

</html>
<?php /**PATH C:\Users\hp\Documents\Laravel\Tourism\resources\views/home.blade.php ENDPATH**/ ?>