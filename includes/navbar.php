<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="Style/style.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary text-light">
        <div class="container-fluid">
            <!-- de knoppen naar de pagina's -->
            <!-- hoofdknop links in de navbar naar de startpagina -->
            <a class="navbar-brand text-light" href="index.php">Vier op een rij</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- naar de startpagina -->
                    <li class="nav-item">
                        <a class="nav-link text-light " href="index.php">Start</a>
                    </li>
                    <!-- naar het scorebord -->
                    <li class="nav-item">
                        <a class="nav-link text-light" href="leaderboard.php">Scorebord</a>
                    </li>
                    <!-- naar contactpagina -->
                    <li class="nav-item">
                        <a class="nav-link text-light" href="contact.php">Contact</a>
                    </li>
                    <!-- om uit te loggen -->
                    <li class="nav-item">
                        <a class="nav-link text-light" href="includes/logout.php">Uitloggen</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- bootstrap verbinding -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>