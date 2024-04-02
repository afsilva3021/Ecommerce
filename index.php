<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/home.css">
    <link rel="stylesheet" href="./src/bootstrap-5/css/bootstrap.min.css">
    <title>Ecommerce</title>
</head>
<body>
    <header>
        <?php require_once('./Views/Components/navbar.php'); ?>
    </header>
    <main>
        <section class="container-fluid">
            <div class="container">
                <h1 id="title">Mundo Iphone</h1>
                <div>
                    <img class="d-flex justify-content-center" src="https://www.apple.com/br/iphone/home/images/meta/iphone__ky2k6x5u6vue_og.png" alt="Iphone">
                </div>
                <div></div>
                <div></div>
            </div>
        </section>
        <section class="sectionCarrousel container-sm">
            <div class="container">
                <?php require_once("./Views/Components/carrousels.php") ?>
            </div>
        </section>
    </main>



    <script src="./src/bootstrap-5/js/bootstrap.bundle.min.js"></script>
</body>
</html>