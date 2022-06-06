<?php require 'core/core.inc.php'; ?>

<!DOCTYPE HTML>

<html lang="en">
    
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Alykat Blues: Movies</title>
        
        <link rel="stylesheet" href="css/main.css" />
        <link rel="stylesheet" href="css/movies.css" />
    </head>
    
    <body>
        <?php
            include 'inc/containers/site/site_h.inc.php'; //Site header
        ?>
        
        <div id="page_c">
            <?php include 'inc/containers/movies/movie_c.inc.php'; //Movie page main content section ?>          
        </div>
        
        <?php  include 'inc/containers/site/site_f.inc.php'; //Site Footer ?>
    </body>
</html>