<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prize</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&family=Lato&family=Shadows+Into+Light&display=swap" rel="stylesheet">
</head>


<style>
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
</style>

<body>
    <nav class="navbar navbar-expand-lg bg-light custom-navbar-color fixed-top shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand  " href="..">Pemanasan Kelompok 9</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link rounded-5 custom-navbar-item-color" href="../profile/samuel">Samuel</a>

                    <a class="nav-link rounded-5 custom-navbar-item-color" href="../profile/delvina">Delvina</a>

                    <a class="nav-link rounded-5 custom-navbar-item-color" href="../profile/mary">Mary</a>

                    <a class="nav-link rounded-5 custom-navbar-item-color" href="../profile/nicholaus">Nicholaus</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid">


        @switch($num)
        @case(1)
        <div class="body-container" style="display:flex; flex-direction:column; align-items:center; justify-content:center; height:100vh">

            <div>
                <h1>
                    Try again, next time!
                </h1>

            </div>

            <div>
                <img class="rounded" style="width: 400px; max-width: 100%; border-radius: 50%;" src="https://img.freepik.com/premium-vector/comic-speech-bubble-with-zonk-text_530597-456.jpg?w=2000" alt="" >

            </div>
        </div>
        @break
        @case(2)
        <div class="body-container" style="display:flex; flex-direction:column; align-items:center; justify-content:center; height:100vh">

            <div>
                <h1>
                    Try again, next time!
                </h1>

            </div>

            <div>
                <img class="rounded" style="width: 400px; max-width: 100%; border-radius: 50%;" src="https://previews.123rf.com/images/vectorshots/vectorshots1304/vectorshots130400175/19419723-zonk-comic-expression-text.jpg" alt="" >

            </div>
        </div>
        
        @break
        @case(3)
        <div class="body-container" style="display:flex; flex-direction:column; align-items:center; justify-content:center; height:100vh">

            <div>
                <h1>
                    Letss gooo!
                </h1>

            </div>

            <div>
                <img class="rounded" style="width: 400px; max-width: 100%; border-radius: 50%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTA_KLJcTjIZw6579XH9TZhFwj6iQBiGFLrEA&usqp=CAU" alt="" >

            </div>
        </div>

        
        @break
        @endswitch
    </div>

</body>

</html>