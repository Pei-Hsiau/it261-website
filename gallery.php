<?php
include('config.php'); 
include('includes/header.php');

?>



<div class="wrapper">
<main>
    <h1><?php echo $mainHeadline ;?></h1>
<table class="desserts">
<?php foreach($pastry as $fullName => $image): ?>
    <tr>
    
    <td>
<img src="img/<?php echo substr($image, 0 , 8)   ;?>.jpeg" 
     alt="<?php echo  $fullName   ;?>" width="413" height="200" class="foods">
        
    </td>
    <td>
<?php echo str_replace('_', ' ', $fullName);?>
        
    </td>
    <td>
       <?php echo substr($image, 9) ;?> 
    </td>
    
    
    </tr>
    
    
    
    
<?php endforeach ;?>
</table>

</main>
    
<aside>
    <h3>Brief Introduction</h3>
<?php 
    
    echo randImages2($desserts); 
    
    ?>
    
    
</aside>
<?php 
include('includes/footer.php');
?>