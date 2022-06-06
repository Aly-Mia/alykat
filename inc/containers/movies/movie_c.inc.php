
<main id="movie_c">
    <?php
    
        $one = '<article>';
        $two = '<header>';
        $three = '<h3>';
        $four = '</h3>';
        $five = '</header>';
        $six = '<section>';
        $seven = '</section>';
        $eight= '<footer>';
        $nine = '</footer>';
        $ten = '</article>';
        
        $listA = "SELECT * FROM `movies`";
        $listQ = mysqli_query($c, $listA);
        $listR = mysqli_fetch_all($listQ);
        $listC = mysqli_num_rows($listQ);
        
        
        echo '<h1>Movie Listings</h1>';
        echo '<ul style="width: 100%; height: 5vh; display: inline-block"><li style="width: 33.3%; height: 5vh; display: inline-block"><h4>Movies Archived: '.$listC.'</h4></li><li style="width: 33.3%; height: 5vh; display: inline-block"></li><li style="width: 33.3%; height: 5vh; display: inline-block"></li></ul>';
        
        
        for($a=0;$a<$listC;$a++) {
            echo $one;
            echo $two;
            echo $three;
            echo $listR[$a][1];
            echo $four;
            echo $five;
            echo $six;
            echo '<img src="'.$listR[$a][3].'" />';
            echo $seven;
            echo $eight;
            echo '<a href="">Info</a>';
            echo '<a href="'.$listR[$a][4].'">Watch now!</a>';
            echo $nine;
            echo $ten;
        }
            
    ?>    
</main>