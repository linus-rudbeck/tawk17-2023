<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get search query</title>
</head>
<body>
    <h1>Get search query</h1>

    <p>
        You searched for <?= $_GET["query"] ?>
    </p>

    <?php var_dump($_GET); ?>
</body>
</html>