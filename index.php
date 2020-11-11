<?php
include('config.php'); 
include('includes/header.php');

?>



<div class="wrapper">
    <h1 class="<?php echo $center;?>"><?php echo $mainHeadline ;?></h1>
<!--    <img src="img/photo1.jpg" alt="photo">-->
    <?php 
    
    echo randImages($photos); 
    
    ?>
    
    <blockquote>
    "You've gotta dance like there's nobody watching,
        Love like you'll never be hurt,
        Sing like there's nobody listening,
        And live like it's heaven on earth."
    
    </blockquote>
    

<?php 
include('includes/footer.php');
?>