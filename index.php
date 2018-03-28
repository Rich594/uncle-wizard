<html>
    <head>
        <title>Uncle Wizard</title>
        
        <link href="https://fonts.googleapis.com/css?family=Joti+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="styles.css" rel="stylesheet" type="text/css"/>
    </head>
    
    <body>
        <div class="main-page">
        <h1>Uncle Wizard</h1>
        
        <div class="links">
            
            <a href='index.php?'>HOME</a>
            <a href='books.php?'>THE BOOKS</a>
            <a href='index.php?'>BUY THE BOOKS</a>
            <a href='index.php?'>SHORT STORIES</a>
            <a href='index.php?'>THE AUTHOR</a>
        
        </div>            
       
        <div class="main-text">
          
            <p>The Uncle Wizard series of books are fun-packed comedy adventures suitable for both boys and girls aged 6-11.  They are chapter books, full of fantastic illustrations.</p>
            
        </div>
        
        <div class="row">
            <?php
            include 'books.php';
            ?>

        </div>
        
        <div class="footer-text">
          
            <p>The Wonderful Adventure of Uncle Wizard, Uncle Wizard and the Golden Orb, and Uncle Wizard and the Land of Magic are copyright Richard Anderson.  The Wonderful Adventure of Uncle Wizard images copyright Stewart Anderson.  Uncle Wizard and the Golden Orb images copyright Richard Warwick.  The contents and design of this website are copyright Rules Review Publishing Limited 2017.</p>
            
        </div>
        </div>
    </body>
</html>
