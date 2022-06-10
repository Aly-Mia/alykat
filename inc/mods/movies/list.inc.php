<?php

$artOpen = '<article>';
$artClose = '</article>';
$hOpen = '<header>';
$hClose = '</header>';
$sideOpen = '<aside>';
$sideClose = '</aside>';
$secOpen = '<section>';
$secClose = '</section>';
$footOpen = '<footer>';
$footClose = '</footer>';

$getMovieList = "SELECT * FROM `movies`";
$moviesQ = mysqli_query($c, $getMovieList);
$movie_c = mysqli_num_rows($moviesQ);
$list_r = mysqli_fetch_all($moviesQ);

?>
<div id="movie-list">
    <?php
        for($a=0;$a<$movie_c;$a++) {
            echo $artOpen;
            echo $hOpen;
            echo '<h3>'.$list_r[$a][1].'</h3>';
            echo $hClose;
            echo $sideOpen;
            echo '<a href="'.$list_r[$a][19].'"><img src="'.$list_r[$a][5].'"/></a>';
            echo $sideClose;
            echo $secOpen;
            echo '<video height="100%" controls autoplay loop muted><source src="'.$list_r[$a][6].'" type="video/mp4"></video>';
            echo $secClose;
            echo $footOpen;
            echo $footClose;
            echo $artClose;
        }
    ?>
    
</div>