<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CV</title>
</head>
<body>
<?php
$work = [['name' => 'IT-Center RWTH', 'date'=>'06.2024 - ongoing'],
    ['name' => 'SE@RWTH Chair for Software Engineering ', 'date'=>'09.2023 - 06.2024'],
    ['name' => 'EDEKA', 'date'=>'01.2022 - 08.2023']];

$edu = [['name' => 'BK Nord', 'date'=>'08.2020 - 06.2023'],
    ['name' => 'Realschule Würselen ', 'date'=>'09.2014 - 06.2020']];
?>
<?php include 'header.php'?>

    <div class="container-fluid" id="mainGrid">
        <div class="row" id="cvBackgroundRow">
            <div class="col-md-4">
                <div class="itemCV" id="leftSide">
                    <img src="/pictures/Profil.jpeg" id="profile" alt="me">
                    <div>
                        <h1 class="headerh1">Hobbies of mine</h1>
                        <div id="hobbiesList" >
                            <h3 id="running" class="fa-icon-before">running</h3>
                            <h3 id="bike" class="fa-icon-before">gravel cycling</h3>
                            <h3 id="swim" class="fa-icon-before">swimming</h3>
                            <h3 id="dlrg" class="fa-icon-before">lifeguard at DLRG</h3>
                            <h3 id="geek" class="fa-icon-before">geek at heart</h3>
                        </div>
                    </div>
                    <div id="scroll_icon"><img src="/pictures/svg/angles-down-solid.svg" id="scrolldown"></div>

                </div>
            </div>
            <div class="col-md-8">
                <div class="itemCV" id="rightSide">
                    <h1 class="headerh1">Welcome to my CV!</h1>
                    <h2 class="headlineCV">About myself</h2>

                    <table class="verticalTextalign " id="professionTable">
                        <tr>
                            <td class="horizontalTextalign">
                                <i class="fa-solid fa-user-tie fa-2xl horizontalTextalign" id="profession"></i>
                            </td>
                            <td>
                                <h3>Software Engineering Apprentice</h3>
                            </td>
                        </tr>
                        <tr>
                            <td class="horizontalTextalign">
                                <i class=" fa-solid fa-building-columns fa-2xl"></i>
                            </td>
                            <td>
                                <h3>FH Aachen - Applied Mathematics and Computer Science</h3>
                            </td>
                        </tr>
                    </table>
                    <h2 class="headlineCV">Work Experience</h2>

                    <table class="cvTable">
                        <?php foreach ($work as $item): ?>
                            <tr>
                                <td><h3><?php echo $item['name']; ?></h3></td>
                                <td class="dateCol"><h3><?php echo $item['date']; ?></h3></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>

                    <h2 class="headlineCV">Education</h2>
                    <table class="cvTable">
                        <?php foreach ($edu as $item): ?>
                            <tr>
                                <td><h3><?php echo $item['name']; ?></h3></td>
                                <td class="dateCol"><h3><?php echo $item['date']; ?></h3></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
            <?php include 'views/footer.php'; ?>

        </div>
        <div class="row">

        </div>
    </div>
</body>
</html>