<?php

define("YEAR", 2014);
define("JOB_TITLE", "Teacher");
define("MAX_BADGES", "150000");

//invalid constant name
//define("2LEGIT", "to quit");

// This is my first name.
$name = "Jeff";


$location = "Orlando, FL";
$full_name = "Mike the Frog";
$name = $full_name;

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8>
        <title><?php echo $name; ?> | Treehouse Profile</title>
        <link href="css/style.css" rel="stylesheet"/>
    </head>

    <body>
        <section class="sidebar text-center">
            <div class="avatar">
                <img src="img/avatar.png" alt="<?php echo $name; ?>">
            </div>
            <h1><?php echo $name; ?></h1>
            <p><?php  echo $location; ?></p>
            <hr/>
            <p>Welcome to PHP Basics!</p>
            <hr/>
            <ul class="social">
                <li><a href=""><span class="icon twitter"></span></a></li>
            </ul>
        </section>
        <section class="main">
            <pre>
                <?php
                $jeffrey = array(22, "black", 2.5, TRUE);

                $eye_colors = array('blue', 'green', 'brown');

                print_r($jeffrey);

                //$eye_colors[1] = "hazel";

                //echo $eye_colors[1];

                ?>
            </pre>

        </section>
    </body>
</html>
