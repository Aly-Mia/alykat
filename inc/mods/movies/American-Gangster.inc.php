<?php
$getMovie = "SELECT * FROM `movies` WHERE title='American Gangster'";
$movieQ = mysqli_query($c, $getMovie);
$movie_r = mysqli_fetch_row($movieQ);

?>
<main id="movie-page">
    <div id="movies-top">
        <div id="movie-poster">
            <?php echo '<img src="'.$movie_r[22].'" />'; //Movie poster?>
        </div>
        
        <div id="movie-info">
            <h3></h3>
            
            <ul>
                <li><h3><?php echo $movie_r[1];?></h3></li>
                <li></li>
                <li><p>Released: <?php echo $movie_r[2];?></p></li>
                <li><p>Runtime: <?php echo $movie_r[3];?></p></li>
                <li><p>Rating: <?php echo $movie_r[4];?></p></li>
            </ul>
        </div>
        
        <div id="movie-links">
            <ul>
                <li><a href="<?php echo $movie_r[6];?>" target="_blank"><img src="../content/imdb-up.png" onmouseover="this.src='../content/imdb-down.png'" onmouseleave="this.src='../content/imdb-up.png'" /></a></li>
                <li><a href="<?php echo $movie_r[8];?>" target="_blank"><img src="../content/mcritic-up.png" onmouseover="this.src='../content/mcritic-down.png'" onmouseleave="this.src='../content/mcritic-up.png'" /></a></li>
                <li><a href="<?php echo $movie_r[7];?>" target="_blank"><img src="../content/rotten-up.png" onmouseover="this.src='../content/rotten-down.png'" onmouseleave="this.src='../content/rotten-up.png'"/></a></li>
            </ul>
        </div>
    </div>
    
    <div id="movies-bttm">
        <div id="movie-people">
            <table>
                <tr>
                    <td><p>Directed by:</td>
                    <td><a href="<?php echo $movie_r[19];?>" target="_blank"><img src="<?php echo $movie_r[20];?>" /><p><?php echo $movie_r[18];?></p></a></td>
                    <td></td>
                    <td></td>
                </tr>
                
                <tr>
                    <td>Starring: </td>
                    <td><a href="<?php echo $movie_r[10];?>" target="_blank"><img src="<?php echo $movie_r[11];?>" /><p><?php echo $movie_r[9];?></p></a></td>
                    <td><a href="<?php echo $movie_r[13];?>" target="_blank"><img src="<?php echo $movie_r[14];?>" /><p><?php echo $movie_r[12];?></p></a></td>
                    <td><a href="<?php echo $movie_r[16];?>" target="_blank"><img src="<?php echo $movie_r[17];?>" /><p><?php echo $movie_r[15];?></p></a></td>
                </tr>
                
            </table>
        </div>
        
        <div id="play-movie">
            <p><?php echo $movie_r[5];?></p>
            
            <a href="<?php echo $movie_r[24];?>" target="_blank"><img src="../content/play-up.png" onmouseover="this.src='../content/play-down.png'" onmouseleave="this.src='../content/play-up.png'"/></a>
        </div>
    </div>
</main>