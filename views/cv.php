<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <title>Noskov CV</title>
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
    <img src="/pictures/Profil.jpeg" id="profile">
<h1 id="headerh1">Welcome to my CV!</h1>

<div id="textColumn">
    <table class="education">
        <tr>
            <div>
                <h2 id="uni">Software Engineering Apprentice</h2>
            </div>
            <h3 id="fh">FH Aachen - Applied Mathematics and Computer Science</h3>
        </tr>

        <tr>
            <td>
                <h2 id="work">Work Experience</h2>
                <table id="history">
                    <?php foreach ($work as $item): ?>
                        <tr>
                            <td><h3><?php echo $item['name']; ?></h3></td>
                            <td><h3><?php echo $item['date']; ?></h3></td>
                        </tr>
                    <?php endforeach; ?>
                </table>

            </td>
        </tr>
        <tr>
            <td>
                <h2 id="edu">Education</h2>
                <table>
                    <?php foreach ($edu as $item): ?>
                        <tr>
                            <td><h3><?php echo $item['name']; ?></h3></td>
                            <td><h3><?php echo $item['date']; ?></h3></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </td>
        </tr>
    </table>

    <table>
        <tr>
            <td><h2 id="hobbies">Hobbies</h2> </td>

        </tr>
    </table>
</div>

<?php include 'footer.php'?>
</body>
</html>