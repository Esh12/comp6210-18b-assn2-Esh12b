<?php include(APPROOT . "/views/includes/header.php"); ?>
<?php include(APPROOT . "/views/includes/menu4.php"); ?>
</div>
<div class="row">
  <!-- Code plain HTML here - use PHP when wanting to display data -->

  <div class="col-sm-6">

  <form class="form1" action="<?php echo URLROOT . 'forms/email/'; ?>" method="POST">
    <div class="form-group">
      <label for="exampleFormControlInput1">Email address</label>
      <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1"> textarea</label>
      <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="form-group">
      <input type="submit" class="form-control btn btn-primary" value="Submit Form" id="sum">
    </div>
  </form>

  </div>
  <div class="col-sm-6">
    <h3>Results</h3>
    <table class="tabletwo">
      <thead>
        <tr>
          <th style="width: 50%;">Email</th>
          <th style="width: 50%;">Message</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($data['emails'] as $email) {
          $output  = "<tr><td>";
          $output .= $email['EMAIL'];
          $output .= "</td><td>";
          $output .= $email['MSG'];
          $output .= "</td></tr>";
          echo $output;
        }?>
      </tbody>
    </table>
  </div>

</div>
</div>
<script>


let exampleFormControlInput1 = document.querySelector('#exampleFormControlInput1');
let exampleFormControlTextarea1 = document.querySelector('#exampleFormControlTextarea1');
let sum = document.querySelector('#sum');
let checkinput = () =>{


    let email = exampleFormControlInput1.value;
    if(email.lenght == 0){
        alert("Enter email");
    }
}
sumx.addEventListener('click',(e) =>{
  
    checkinput()
; e.preventDefault()})

    </script>
<?php include(APPROOT . "/views/includes/footer.php"); ?>