<?php include(APPROOT . "/views/includes/header.php"); ?>

<div class="row">
  <!-- Code plain HTML here - use PHP when wanting to display data -->
  
   <div class="content-background-1">
  <?php include(APPROOT . "/views/includes/menu4.php"); ?>
 <p class="Classname"> COMP.5211</p>

</div>

<form class="mui-form" ction="<?php echo URLROOT . 'forms/feedback'; ?>" method="POST">
  <legend>Feedback</legend>
  <div class="mui-textfield">
    <input type="text" name = "name" id="name" required>
    <label>Name</label>
  </div>
  <div class="mui-textfield mui-textfield--float-label">
    <input type="email" name = "email" id="email" required>
    <label>Required Email Address</label>
  </div>
  <div class="mui-textfield mui-textfield--float-label">
    <input type="input" name="subject" id="subject" required>
    <label>Subject</label>
  </div>
  <div class="mui-textfield mui-textfield--float-label">
    <input type="input" name="message" rid="message" equired>
    <label>Required Textarea</label>
  </div>
 
  <button type="submit" class="mui-btn mui-btn--raised">Submit</button>
</form>

  

<?php include(APPROOT . "/views/includes/footer.php"); ?>