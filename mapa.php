
<?php

include("classes/checksessao.php");

?>

<html>
    <head>
        <meta charset="UTF-8">

        <title>Location</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="interface">
            <nav class="navbar navbar-expend-lg bg-info">
                <h1 class="nav text-light">MENU</h1>

                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" href="logout.php">Log out</a>
                    </li>
                </ul>
            </nav>
            
            <div class="row">
                <div class="col-xl-12">
                        <iframe
                            width="100%"
                            height="700"
                            frameborder="0" style="border: 0"
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDgVdHPQA91pG5EpHv0IJG1LXEQzPQOsQ4&q=Brasilia+DF" allowfullscreen>
                        </iframe>

                </div>
            </div>
            </div>
        </div>
    </body>
</html>
