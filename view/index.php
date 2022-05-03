<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Site de Cuisine</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/style.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../public/images/banner_1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Recettes de cuisine</h1>
                        <p>Ici retrouvez nos recettes sucrées et salées !</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../public/images/banner_2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Recettes de cuisine</h1>
                        <p>Ici retrouvez nos recettes sucrées et salées !</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../public/images/banner_3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Recettes de cuisine</h1>
                        <p>Ici retrouvez nos recettes sucrées et salées !</p>
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
        <div class="row">
            <div class="col-sm-6">
                <div class="card text-white">
                    <a class="lienType" href="recettesSalees.view.php">
                        <img src="../public/images/recettes_salees.jpg" class="card-img" alt="Recettes salées">
                        <div class="card-img-overlay">
                            <h4 class="card-title"> Recettes Salées </h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card text-white">
                    <a href="recettesSucrees.view.php">
                        <img src="../public/images/recettes_sucrees.jpg" class="card-img-top" alt="Recettes sucrées">
                        <div class="card-img-overlay">
                            <h4 class="card-title"> Recettes Sucrées </h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>