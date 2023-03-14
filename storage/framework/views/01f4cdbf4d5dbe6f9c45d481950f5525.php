<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&family=Lato&family=Shadows+Into+Light&display=swap" rel="stylesheet">

    <title>Nicholaus</title>
</head>

<body>
    <style>
        .custom-body-color {
            background-color: #00203FFF !important;
        }

        .custom-navbar-color {
            background-color: #cedef0 !important;
        }

        .custom-navbar-item-color {
            margin: 1%;
            padding: 1%;
            padding-left: 2%;
            padding-right: 2%;
        }

        .custom-navbar-item-color:hover {
            background-color: #ACDFD2 !important;
        }

        .custom-navbar-item-color.active {
            background-color: #ADEFD1FF !important;
        }

        .custom-card-color {
            background-color: #ADEFD1FF !important;
        }

        /* img{
            border-radius: 50% !important;
        } */
        .custom-card-pop-color {
            background-color: #ADEFD1FF !important;
        }
    </style>


    <!-- array kosong -->

    </head>

    <body class="custom-body-color" style="box-sizing: border-box; font-family: 'Lato', sans-serif;">
        <!-- Navbar -->
        



        <!-- Profile -->
        <div class="container-fluid" style="margin-top: 45px">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4 shadow rounded-4 custom-card-pop-color" style="margin: 30px; padding: 20px">
                        <div class="card-body text-center">
                            <img src="../img/Nicholaus.png" class="shadow" alt="Nicholaus" style="max-width: 70%; border-radius: 50%;">
                            <h1 class="my-3" style="font-family: 'Caveat', cursive; font-weight:bold;">Nicholaus</h1>
                            <p class="text-muted mb-1">Computer Science and Statistics</p>
                            <p class="text-muted mb-1">Binus University, Jakarta</p>


                        </div>
                    </div>
                </div>

                <?php ($key = array()); ?>
                <?php ($value = array()); ?>
                <?php (array_push($key, "Name", "E-mail", "Birthday", "Favorite Course", "Skills or Hobbies", "Description")); ?>
                <?php (array_push($value, "Nicholaus", "nicholaus@binus.ac.id","March 24", "Human Computer and Interaction", "Willingness to learn, Volleyball", "Hi, I am Nicholaus. I am a 20-year-old student currently studying computer science and statistics at Bina Nusantara University. I am passionate about technology and enjoys learning about programming languages and software development. In my free time, I like to play video games, listen to music, and watch movies. I also enjoys staying active by going for runs and playing basketball with my friends. With My dedication and hard work, I hope to one day become a successful data scientist.")); ?>

                <div class="col-lg-7">
                    <div class="card mb-4 shadow rounded-4 custom-card-color" style="margin:30px; padding: 20px;">
                        <div class="card-body">
                            <?php for($i = 0; $i<sizeof($key); $i++): ?> <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">
                                        <?php echo e($key[$i]); ?>

                                    </p>
                                </div>

                                <div class="col-sm-8">
                                    <p class="mb-0 text-muted">
                                        <?php echo e($value[$i]); ?>

                                    </p>
                                </div>
                        </div>
                        <hr>
                        <?php endfor; ?>
                    </div>

                </div>
            </div>
        </div>
        </div>



        <?php $__env->startSection('content'); ?>
        <div class="custom-body-color" style="box-sizing: border-box; font-family: 'Lato', sans-serif; font-weight: bold; justify-content:center; display:flex; align-items:center;">
            <div class="container-fluid" style="margin-top: 45px;">
                <div class="row">
                    <div class="col">
                        <div class="card mb-4 shadow rounded-4 custom-card-pop-color" style="margin: 30px; padding: 20px">
                            <div class="card-body text-center" id="kesini">
                                <h3 style="font-family: Monac">
                                    Guess His Lucky Number!
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="margin-top: 45px">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4 shadow rounded-4 custom-card-pop-color" style="margin: 30px; padding: 20px">
                        <div class="card-body text-center">
                            <div class="card-body text-center">
                                <button type="button" onclick="window.location='<?php echo e(url("prize/1")); ?>'" class="btn btn-primary btn-lg m-5 shadow">Mystery Box 7</button>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card mb-4 shadow rounded-4 custom-card-pop-color" style="margin: 30px; padding: 20px">
                        <div class="card-body text-center">
                            <div class="card-body text-center">
                                <button type="button" onclick="window.location='<?php echo e(url("prize/2")); ?>'" class="btn btn-success btn-lg m-5 shadow">Mystery Box 55</button>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card mb-4 shadow rounded-4 custom-card-pop-color" style="margin: 30px; padding: 20px">
                        <div class="card-body text-center">
                            <div class="card-body text-center">
                                <button type="button" onclick="window.location='<?php echo e(url("prize/3")); ?>'" class="btn btn-danger btn-lg m-5 shadow" >Mystery Box 10</button>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>


        <?php $__env->stopSection(); ?>


    </body>

</html>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\Semester 6\Web Programming\gslc1-individu\resources\views/profile/nicholaus.blade.php ENDPATH**/ ?>