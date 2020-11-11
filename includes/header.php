<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $title ;?></title>
<link href="css/styles.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400&display=swap" rel="stylesheet">
</head>
<body class="<?php echo $body; ?>">
 <header>
     <div class = "inner-header">
         <a href="index.php"><img id= "logo" src="img/sitelogo.png" alt="logo" width="100" height="100"></a>
    <nav>
<!--
        <ul>
            <li><a href="index.php">Index</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="customers.php">Customers</a></li>
            <li><a href="daily.php">Daily</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
-->
     
     <ul>
     <?php
        
        echo makeLinks($nav);
        
        ?>
    
         
    </ul>
        
    </nav>
     </div>
</header>