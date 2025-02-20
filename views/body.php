<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Noskov</title>

</head>
<body>
    <?php include 'views/header.php'; ?>
    <div class="main">
        <div class="hero-image ">
            <div class="hero-text">
                <div class="typewriter">
                    <h1>Hello There!</h1>
                </div>
                <p>I'm a Software Engineering Apprentice and so much more!</p>
            </div>
        </div>

        <div class="headline">
            <h1>
                About myself:
            </h1>
        </div>

        <div class="container-md" id="welcomeText">
            <p>
                I am honored to welcome you on my webpage. This as a little side project of mine.
                It is fully self-made with love. Take a look and get to know me a little better!
            </p>
            <p>
                XOXO Bo
            </p>
        </div>


        <div class="headline">
            <h1>
                Here are some Topics:
            </h1>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="item" id="cvItem">
                        <h3> My CV</h3>
                        <a href="/cv">
                            <i class="fa-solid fa-circle-arrow-right link-icon fa-2xl" ></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item" id="bikeItem">
                        <h3> My Hobbies</h3>
                        <a href="/hobbies">
                            <i class="fa-solid fa-circle-arrow-right link-icon fa-2xl" ></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item" id="emptyItem">
                        <h3> Empty</h3>
                        <a href="/esfef">
                            <i class="fa-solid fa-circle-arrow-right link-icon fa-2xl" ></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include 'views/footer.php'; ?>

</body>
</html>
