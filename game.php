<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>4OER</title>
    <link rel="stylesheet" href="Style/style.css">
    <script src="JavaScript/connect4.js"></script>
    <link rel="shortcut icon" type="logo/png" href="images/image.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <!-- NAVBAR -->
    <?php include("includes/navbar.php"); ?>
    <!-- container terug naar homepage -->
    <div class="container">
        <div class="p-3 text-left">
            <a class="btn btn-outline-black btn-lg text-white font-weight-bold" style="background-color: #247BDA; " href="index.php" role="button">Terug naar Homepagina</a>
        </div>
        <!-- game vier op een rij  -->
        <div class="container text-center">
            <!-- vier op een rij -->
            <div class="game">
                <h1>VIER OP EEN RIJ</h1>
                <!-- winner -->
                <h2 id="winner"></h2>
                <!-- bord vier op een rij -->
                <div id="board"></div>
            </div>
            <!-- herstart spel button -->
            <div class="p-3 text-center">
                <a class="btn btn-outline-black btn-lg text-white font-weight-bold" style="background-color: #247BDA; " href="game.php" role="button">Herstart spel</a>
            </div>
        </div>


    </div>
    <!-- NAVBAR -->
    <?php include("includes/footer.php"); ?>
    <!-- vebinding met bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>