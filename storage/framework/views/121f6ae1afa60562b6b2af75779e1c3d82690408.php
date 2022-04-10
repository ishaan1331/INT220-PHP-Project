<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ladakh</title>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo e(asset('categorystyle.css')); ?>" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700&display=swap" rel="stylesheet">
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
                        <a class="nav-link active" aria-current="page" href="<?php echo e(url('/')); ?>">Home</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('categories')); ?>">Categories</a>
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

    <img src="<?= asset('Assets\Group\ladakh.jpg') ?>" class="card-img-top custom-page" alt="... ">

    <div class="custom-page-div-font">
        Ladakh , India
    </div>
    <p class="custom-page-list-para">
        The package includes
        <ul class="custom-page-list">

            <li>Day 1 - Pangong Tso<br>
                <img src="<?= asset('Assets\Group\ladakh\ladakh1.jpg') ?>" class="custom-page-image">
            </li>


            <li>Day 1 - Thiksey Monastery<br>
                <img src="<?= asset('Assets\Group\ladakh\ladakh2.jpg') ?>" class="custom-page-image">
            </li>

            <li>Day 1 - Confluence of the Indus and Zanskar Rivers<br>
                <img src="<?= asset('Assets\Group\ladakh\ladakh3.jpg') ?>" class="custom-page-image">
            </li>

            <li>Day 2 - Hall of Fame<br>
                <img src="<?= asset('Assets\Group\ladakh\ladakh4.jpg') ?>" class="custom-page-image">
            </li>

            <li>Day 2 - Gurdwara Pathar Sahib<br>
                <img src="<?= asset('Assets\Group\ladakh\ladakh5.jpg') ?>" class="custom-page-image">
            </li>

            <li>Day 2 - Shanti Stupa<br>
                <img src="<?= asset('Assets\Group\ladakh\ladakh6.jpg') ?>" class="custom-page-image">
            </li>

            <li>Day 3 - Tanglang La<br>
                <img src="<?= asset('Assets\Group\ladakh\ladakh7.jpg') ?>" class="custom-page-image">
            </li>

            <li>Day 3 - Magnetic Hill<br>
                <img src="<?= asset('Assets\Group\ladakh\ladakh8.jpg') ?>" class="custom-page-image">
            </li>


            <li>Day 4 - Sand Dunes Leisure Park<br>
                <img src="<?= asset('Assets\Group\ladakh\ladakh9.jpg') ?>" class="custom-page-image">
            </li>

            <li>Day 4 - Leh Royal Palace<br>
                <img src="<?= asset('Assets\Group\ladakh\ladakh10.jpg') ?>" class="custom-page-image">
            </li>

            <li>Day 4 - Hunder Sand Dunes<br>
                <img src="<?= asset('Assets\Group\ladakh\ladakh11.jpg') ?>" class="custom-page-image">
            </li>

            <li>Day 5 - Diskit Gompa <br>
                <img src="<?= asset('Assets\Group\ladakh\ladakh12.jpg') ?>" class="custom-page-image">
            </li>

            <li>Day 6 - Dras War Memorial<br>
                <img src="<?= asset('Assets\Group\ladakh\ladakh13.jpg') ?>" class="custom-page-image">
            </li>

            <li>Day 6 - Biking at Changla Pass<br>
                <img src="<?= asset('Assets\Group\ladakh\ladakh14.jpg') ?>" class="custom-page-image">
            </li>

            <li>Day 7 - Tso Moriri <br>
                <img src="<?= asset('Assets\Group\ladakh\ladakh15.jpg') ?>" class="custom-page-image">
            </li>

            <li>During the trip , we would stay at The Driftwood Ladakh<br>
                <div id="carouselExampleControls" class="carousel slide custom-page-image" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?= asset('Assets\Group\ladakh\ladakh16.jpg') ?>" class="d-block w-100 custom-page-image" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= asset('Assets\Group\ladakh\ladakh17.jpg') ?>" class="d-block w-100 custom-page-image" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= asset('Assets\Group\ladakh\ladakh18.jpg') ?>" class="d-block w-100 custom-page-image" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </li>


        </ul>
    </p>

    <p class="custom-page-list-para bottom">
        Price - <br>
        <p class="custom-page-div-font bottom ">
            2,20,000 /- INR ( For a group of 4 )
            <br><br> Departure date -

            <p class="custom-page-div-font date">
                <input type="date" name="date" id=" "><br><br>
            </p>


            <button type="button " class="btn btn-primary btn-lg custom-page-div-font abc">Book Now !!</button>
        </p>
    </p>



    <div class=" footer ">
        <a href="https://www.facebook.com/profile.php?id=100010351382510 "><i class="fab fa-facebook-f fa-2x custom fb "></i></a>
        <a href="https://www.instagram.com/ishxxn_b/ "><i class="fab fa-instagram fa-2x custom ig "></i></a>
        <a href="mailto:ishaanbillore13@gmail.com "><i class="far fa-envelope-open fa-2x custom mail "></i></a>
        <a href="https://www.linkedin.com/in/ishaanbillore/ "><i class="fab fa-linkedin-in fa-2x custom linkedin "></i></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous "></script>

</body>

</html>
<?php /**PATH C:\Users\hp\Documents\Laravel\Tourism\resources\views/ladakh.blade.php ENDPATH**/ ?>