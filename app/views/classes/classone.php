<?php include(APPROOT . "/views/includes/header.php"); ?>

<div class="row">
  <!-- Code plain HTML here - use PHP when wanting to display data -->
  
   <div class="content-background-1">
  <?php include(APPROOT . "/views/includes/menu2.php"); ?>
 <p class="Classname"> COMP.5209</p>

    </div>
    <div class="content">


       <?php 
    foreach($data["system"] as $system) {
        ?>

            <div class="col-sm">
                <h1><?php echo $system["CName"]; ?> </h1> 
                <p>
                <?php echo $system["Discription"]; ?> 
                
    </p>
            
            

        <?php
    }
?>

</div>
<?php include(APPROOT . "/views/includes/footer.php"); ?>