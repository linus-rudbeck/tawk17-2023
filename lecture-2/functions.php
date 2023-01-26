<?php

function output_name()
{
    echo "Linus";
}

function get_name()
{
    return "Anna";
}

function get_welcome_message($name_to_welcome)
{
    // Goal: "Hello there Anna!"
    $welcome_message = "Hello there {$name_to_welcome}!";

    return $welcome_message;
}

function add_three_numbers($first_number, $second_number, $third_number)
{
    $sum = $first_number + $second_number + $third_number;

    return $sum;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>

<body>
    <h1>Functions</h1>

    <?php output_name(); ?>

    <br>

    <?php
    $sisters_name = get_name();
    echo $sisters_name;
    ?>

    <br>

    <?php
    $sister_welcome_message = get_welcome_message($sisters_name);
    echo $sister_welcome_message;
    ?>

    <br>

    <?php
    echo add_three_numbers(2, 4, 8);
    ?>

</body>

</html>