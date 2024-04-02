<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Views/src/css/home.css">
    <link rel="stylesheet" href="./Views/src/bootstrap-5/css/bootstrap.min.css">
    <title>Ecommerce</title>
</head>

<body>
    <header>
        <?php require_once('./Views/Components/navbar.php'); ?>
    </header>
    <main>
        <section class="container-fluid">
            <div class="d-flex justify-content-center">
                <!-- -->
                <img class="img-fluid mt-5 pt-5" src="./Views//src//imgs//iphonesWallpaper.png" alt="">
            </div>
            <div class="row">
                <h1 class=" d-flex justify-content-center" id="title">Mundo Iphone</h1>
            </div>
        </section>
        <div class="container-sm">
            <div class="row">
                <?php require_once("./Views/Components/carrousels.php") ?>
            </div>

        </div>
        </section>
    </main>



    <script src="./Views//src//bootstrap-5/js/bootstrap.bundle.min.js"></script>
</body>

</html>