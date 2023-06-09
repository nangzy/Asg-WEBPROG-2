<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Mary</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        
        <link
            href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&family=Lato&family=Shadows+Into+Light&display=swap" rel="stylesheet">

        <style>
            .custom-body-color {
                background-color: #fcfcfc !important;
            }
            .custom-navbar-color {
                background-color: #fbefe1 !important;
            }
            .custom-navbar-item-color {
                margin: 1%;
                padding: 1%;
                padding-left: 2%;
                padding-right: 2%;
            }
            .custom-navbar-item-color:hover {
                background-color: #d6cfc7 !important;
            }
            .custom-navbar-item-color.active {
                background-color: #fdeddd !important;
            }
            .custom-card-color {
                background-color: #ffecd9 !important;
            }
            .custom-card-pop-color {
                background-color: #ffecd9 !important;
            }
        </style>
    </head>

    <body class="custom-body-color" style="box-sizing: border-box; font-family: 'Lato', sans-serif;">
        <!-- Navbar -->
        @extends('template')

        <!-- Profile -->
        <div class="container-fluid" style="margin-top: 45px">

            <div class="row">

                <div class="col-lg-4">

                    <div class="card mb-4 shadow rounded-4 custom-card-pop-color" style="margin: 30px; padding: 20px">

                        <div class="card-body text-center">
                            <img src="../img/mary.png" class="rounded-4 shadow" alt="Mary Regina Ang" style="max-width: 70%;">
                            <h1 class="my-3" style="font-family: 'Caveat', cursive; font-weight:bold;">Mary Regina Ang</h1>
                            <p class="text-muted mb-1">Computer Science and Statistics</p>
                            <p class="text-muted mb-1">Binus University, Jakarta</p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-7">

                    <div class="card mb-4 shadow rounded-4  custom-card-color" style="margin: 30px; padding: 20px">

                        <div class="card-body">

                            <div class="row">

                                <div class="col-sm-3">
                                    <p class="mb-0">Name</p>
                                </div>

                                <div class="col-sm-8">
                                    <p class="text-muted mb-0">Mary Regina Ang</p>
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">E-mail</p>
                                </div>

                                <div class="col-sm-8">
                                    <p class="text-muted mb-0">mary.ang@binus.ac.id</p>
                                </div>
                            </div>

                            <hr>
                            <div class="row">

                                <div class="col-sm-3">
                                    <p class="mb-0">Birthday</p>
                                </div>

                                <div class="col-sm-8">
                                    <p class="text-muted mb-0">October 13</p>
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Favorite Course</p>
                                </div>

                                <div class="col-sm-8">
                                    <p class="text-muted mb-0">Machine Learning</p>
                                </div>
                            </div>

                            <hr>
                            <div class="row">

                                <div class="col-sm-3">
                                    <p class="mb-0">Skills or Hobbies</p>
                                </div>

                                <div class="col-sm-8">
                                    <p class="text-muted mb-0">Watching Youtube</p>
                                </div>
                            </div>

                            <hr>
                            <div class="row">

                                <div class="col-sm-3">
                                    <p class="mb-0">Description</p>
                                </div>

                                <div class="col-sm-8">
                                    <p class="text-muted mb-0">I'm Mary, a student majoring in Computer Science and
                                        Statistics in Binus University. As a student, I enrolled in various courses such as design, 
                                        digital marketing, chinese metaphysics, programming, and more to improve my hard-skills.
                                        During my second year, I participate in several organizations in my university in
                                        order to get new experiences and improve my soft-skills, such as negotiation, public
                                        speaking, critical thinking, creative and innovative thinking, and problem solving.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>