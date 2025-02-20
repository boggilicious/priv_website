<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/footer.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<script src="js/main.js" type="text/javascript"></script>
<?php
$request = $_SERVER['REQUEST_URI'];
$viewDir = '/views/';

switch ($request) {
    case '/':
        require __DIR__ . $viewDir .'body.php';
        break;
    case '/cv':
        require __DIR__ . $viewDir .'newcv.php';
        break;
    case '/hobbies':
        require __DIR__ . $viewDir . 'hobbies.php';
        break;
    default:
        require __DIR__ . $viewDir . '404.php';
}
?>
