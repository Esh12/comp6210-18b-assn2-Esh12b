<?php include(APPROOT . "/views/includes/header.php"); ?>

<div class="row">
  <!-- Code plain HTML here - use PHP when wanting to display data -->
  
  <div class="imageID">
  <?php include(APPROOT . "/views/includes/menu3.php"); ?>
  <?php 
    foreach($data["mypic"] as $mypic) { ?>

        
<img class="icon" src="<?php echo URLROOT . "images/" . $mypic["IMAGE"] . ".png" ?>"alt="Card image cap">
<?php } ?>
      

<?php 
foreach($data["pic"] as $pic) { ?>

    
<img class="social" src="<?php echo URLROOT . "images/" . $pic["IMAGE"] . ".png" ?>"alt="Social">
<?php } ?>  
 

    </div>
    <div class="content">

       <div class="text">
       <?php 
    foreach($data["info"] as $info) {
        ?>

            <div class="col-sm">
                <h1><?php echo $info["FNAME"]; ?>
                <?php echo $info["LNAME"]; ?> </h1> 
                
                 <p> <b> <i> <?php echo $info["Dname"]; ?>  </b> </i> <?php echo $info["DOB"]; ?> </p>
                <p> <b> <i> <?php echo $info["Pname"]; ?> </b> </i><?php echo $info["PHONE"]; ?> </p>
                <p> <b> <i> <?php echo $info["Ename"]; ?> </b> </i><?php echo $info["EMAIL"]; ?> </p>
              
               <p> <b> <?php echo $info["About"]; ?> </p> </b>
               <p> <?php echo $info["Reason"]; ?> </p>
            </div>
            
            

        <?php
    }
?>
<div id="mc_embed_signup">
<form action="https://facebook.us19.list-manage.com/subscribe/post?u=44648fba71331606b40b6b734&amp;id=36e191a01d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<label for="mce-EMAIL">Subscribe to our mailing list</label>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_44648fba71331606b40b6b734_36e191a01d" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>


</div>







<!--End mc_embed_signup-->
<!--End mc_embed_signup-->
  
</div>
              
    </div>

    

</div>
<?php include(APPROOT . "/views/includes/footer.php"); ?>