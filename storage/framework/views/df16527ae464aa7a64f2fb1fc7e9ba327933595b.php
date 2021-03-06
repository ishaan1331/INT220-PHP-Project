<!DOCTYPE html>
<html lang="en">

<head>
    <title>Maldives</title>
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

    <img src="<?= asset('Assets\Honeymoon\maldives.jpg') ?>" class="card-img-top custom-page" alt="... ">

    <div class="custom-page-div-font">
        Maldives , South Asia
    </div>
    <p class="custom-page-list-para">
        The package includes
        <ul class="custom-page-list">

            <li>Day 1 - Laying in Bikini beach , Maafushi Island<br>
                <img src="<?= asset('Assets\Honeymoon\Maldives\maldives1.jpg') ?>" class="custom-page-image">
            </li>


            <li>Day 1 - iCom Tours - Private Day Tours (Watersports)
                <br>
                <img src="<?= asset('Assets\Honeymoon\Maldives\maldives2.jpg') ?>" class="custom-page-image">
            </li>

            <li>Day 2 - ScubaCaribe in Dhalu Atoll and Spa<br>
                <img src="<?= asset('Assets\Honeymoon\Maldives\maldives3.jpg') ?>" class="custom-page-image">
            </li>


            <li>Day 3 - Chilling at Alimatha Island <br>
                <img src="<?= asset('Assets\Honeymoon\Maldives\maldives5.jpg') ?>" class="custom-page-image">
            </li>


            <li>Day 4 - Candlelight dinner at M6M Madhoo Island
                <br>
                <img src="<?= asset('Assets\Honeymoon\Maldives\maldives7.jpg') ?>" class="custom-page-image">
            </li>


            <li>During the trip , we would be staying at different hotels <br>

                <div id="carouselExampleCaptions" class="carousel slide custom-page-image" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8" aria-label="Slide 9"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="9" aria-label="Slide 10"></button>



                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?= asset('Assets\Honeymoon\Maldives\maldives8.jpg') ?>" class="d-block w-100 custom-page-image" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="carousel-lower-heading">Kaani Palm Beach , Maafushi Island
                                </h5>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="<?= asset('Assets\Honeymoon\Maldives\maldives9.jpg') ?>" class="d-block w-100 custom-page-image" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="carousel-lower-heading">Kaani Palm Beach , Maafushi Island</h5>

                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="<?= asset('Assets\Honeymoon\Maldives\maldives10.jpg') ?>" class="d-block w-100 custom-page-image" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="carousel-lower-heading">Kaani Palm Beach , Maafushi Island</h5>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="<?= asset('Assets\Honeymoon\Maldives\maldives11.jpg') ?>" class="d-block w-100 custom-page-image" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="carousel-lower-heading">NAKAI Alimatha Resort , Alimatha Islands
                                </h5>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="<?= asset('Assets\Honeymoon\Maldives\maldives12.jpg') ?>" class="d-block w-100 custom-page-image" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="carousel-lower-heading">NAKAI Alimatha Resort , Alimatha Islands</h5>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="<?= asset('Assets\Honeymoon\Maldives\maldives13.jpg') ?>" class="d-block w-100 custom-page-image" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="carousel-lower-heading">NAKAI Alimatha Resort , Alimatha Islands</h5>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="<?= asset('Assets\Honeymoon\Maldives\maldives14.jpg') ?>" class="d-block w-100 custom-page-image" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="carousel-lower-heading">NAKAI Alimatha Resort , Alimatha Islands</h5>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="<?= asset('Assets\Honeymoon\Maldives\maldives14.jpg') ?>" class="d-block w-100 custom-page-image" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="carousel-lower-heading">Sun Siyam Olhuveli , Maadhoo Island
                                </h5>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="<?= asset('Assets\Honeymoon\Maldives\maldives16.jpg') ?>" class="d-block w-100 custom-page-image" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="carousel-lower-heading">Sun Siyam Olhuveli , Maadhoo Island</h5>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="<?= asset('Assets\Honeymoon\Maldives\maldives17.jpg') ?>" class="d-block w-100 custom-page-image" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="carousel-lower-heading">Sun Siyam Olhuveli , Maadhoo Island</h5>
                            </div>
                        </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
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
            3,50,000 /- INR (Including overall hotel stays , vehicle charges and food at the best restaurants )
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

</html>
<?php /**PATH C:\Users\hp\Documents\Laravel\Tourism\resources\views/maldives.blade.php ENDPATH**/ ?>