<?php include(APPROOT . "/views/includes/header.php"); ?>

<div class="row">
  <!-- Code plain HTML here - use PHP when wanting to display data -->
  
   <div class="content-background-1">
  <?php include(APPROOT . "/views/includes/menu2.php"); ?>
 <p class="Classname"> COMP.5211</p>

    </div>
    <div class="content">


       <?php 
    foreach($data["classes"] as $classes) {
        ?>

            <div class="col-sm">
                <h1><?php echo $classes["CName"]; ?> </h1> 
                <p>
                <?php echo $classes["Discription"]; ?> 
                
    </p>
            
            

        <?php
    }
?>

</div>
<?php include(APPROOT . "/views/includes/footer.php"); ?>