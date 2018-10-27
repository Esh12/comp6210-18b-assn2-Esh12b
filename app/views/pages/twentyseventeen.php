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
    <?php 

    foreach($data["twentyseventeen"] as $twentyseventeen) {
        ?>
<div class= "classscontent">
            <div class="classgrid">
                <h1><?php echo $twentyseventeen["Class"]; ?> </h1>
                
               <p> <?php echo $twentyseventeen["About"]; ?> </p>
            </div>
    </div>
            

        <?php
    }
?>
       <div class="text">
      

</div>







<!--End mc_embed_signup-->
<!--End mc_embed_signup-->
  
</div>
              
    </div>

    

</div>
<div id="map"></div>
 
 <script>
   function initMap(){
   // Map options
   var options = {
     zoom:8,
     center:{lat:-37.680130,lng:176.168760}
   }
 
   // New map
   var map = new google.maps.Map(document.getElementById('map'), options);
 
  var markers = [
         {
           coords:{lat:-37.008247,lng:174.785034},
           iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
           content:'<h1>Lynn MA</h1>'
         },
         {
           coords:{lat:-41.327222,lng:172.532222},
           iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
           content:'<h1>Amesbury MA</h1>'
         },
         {
           coords:{lat:-43.486397,lng:172.536865}
         }
       ];
 
   // Loop through markers
   for(var i = 0;i < markers.length;i++){
     // Add marker
     addMarker(markers[i]);
   }
    
   // Add Marker Function
   function addMarker(props){
     var marker = new google.maps.Marker({
       position:props.coords,
       map:map,
       //icon:props.iconImage
     });
 
     // Check for customicon
     if(props.iconImage){
       // Set icon image
       marker.setIcon(props.iconImage);
     }
 
     // Check content
     if(props.content){
       var infoWindow = new google.maps.InfoWindow({
         content:props.content
       });
 
       marker.addListener('click', function(){
         infoWindow.open(map, marker);
       });
     }
   }
 }
 
 </script>
 
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPmtFmtOgBg43u716lAqidMr_WN61air4&callback=initMap"
   async defer></script>
       
  
     

 
<?php include(APPROOT . "/views/includes/footer.php"); ?>