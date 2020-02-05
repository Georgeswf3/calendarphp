<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="cours.css">
        <title><?= isset($title) ? h($title) : 'Calendrier G2T'; ?></title>

    </head>
    
    <body>
    <nav class="navbar navbar-dark bg-primary mb-3">
        <a class="navbar-brand" href="./demo.php">Calendrier G2T</a>
    </nav>