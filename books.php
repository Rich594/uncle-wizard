 <?php
    require_once 'dbconnection.php';
    
    $query = "SELECT * FROM books";
    $result = $link->query($query);
    if (!$result) die($link->error);
    
    $rows = $result->num_rows;
    
    for ($j = 0 ; $j < $rows ; ++$j) {
        
            $result->data_seek($j);
            $row = $result->fetch_array(MYSQLI_ASSOC);
            
            $bookname = $row['bookname'];  
            $reference= $row['reference'];
            
            if ($reference == 1) $reference = "The Wonderful Adventure of Uncle Wizard is the first Uncle Wizard book. It is available in printed format, and on Kindle.﻿﻿";
            if ($reference == 2) $reference = "Uncle Wizard and the Golden Orb is the second Uncle Wizard book, and is now available in paperback.﻿﻿";
            if ($reference == 3) $reference = "The third Uncle Wizard book is currently being written and will follow on from Uncle Wizard and the Golden Orb.";        
                    
            echo "<span class='column'>"."<img class='images' src='images/$bookname.jpg'></a>"."<br>"."<br>";
            echo $row['bookname']."<br>";
            echo "<span class='column1'>".$reference."</span>"."</span>";
            
    }
 ?>

