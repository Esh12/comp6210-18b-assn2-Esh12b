<?php
      use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\Exception;
      require APPROOT.'/vendor/phpmailer/phpmailer/src/Exception.php';
      require APPROOT.'/vendor/phpmailer/phpmailer/src/PHPMailer.php';
      require APPROOT.'/vendor/phpmailer/phpmailer/src/SMTP.php';
      include(APPROOT . '/helper/helperfunctions.php');
    class forms extends Controller {



      public function __construct() {
        $this->info  = $this->model('_forms');
        

     
      }
     
      
      public function index() {
        
       $data = [

         'form' => $this->info->getAllPosts(),
      
         

      ];
     
       
        $this->view('forms/index', $data);
       
      }
     
      
      public function feedback() {
        
        $data = [
 
       
          
 
       ];
       if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])) {
        if($this->info->addPerson($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message'])) {
            $data = [
                'title' => "Person add successfully"
            ];
        }
    } else {
        $data = [
            'title' => "Please add a person"
        ];
    }
        
         $this->view('forms/feedback', $data);
        
       }



       
       public function email() {
        // variables for data or model functions go here
        $emails = $this->info->getAllMessages();
        // add data or variables to the array using key-value pairs
        $data = [
          'emails' => $emails
        ];
        if(!empty($_POST['email']) && !empty($_POST['message'])) {
          if($this->info->addMessage($_POST['email'], $_POST['message'])) {
          
            //How to use stack overflow :-) => https://stackoverflow.com/a/4963763
            //Composer, install this => composer require phpmailer/phpmailer
            $mail = new PHPMailer(true);
            //Send mail using gmail
            $mail->IsSMTP(); // telling the class to use SMTP
            $mail->SMTPAuth = true; // enable SMTP authentication
            $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
            $mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
            $mail->Port = 465; // set the SMTP port for the GMAIL server
            $mail->Username = GUSER; // Set the Constant in helper/startup.php
            $mail->Password = GPASS; // Set the Constant in helper/startup.php
            //Typical mail data
            $mail->AddAddress($_POST['email'], 'Esh');
            $mail->SetFrom($_POST['email'], 'Esh');
            $mail->Subject = "MVC CONTACT FORM";
            $mail->Body = $_POST['message'];
            try{
                $mail->Send();
                header("Location: ".URLROOT."forms/email");
            } catch(Exception $e){
                //Something went bad
                echo "<h1>Fail - </h1>" . $mail->ErrorInfo;
            }
          } 
        } 
        $this->view('forms/email', $data);
      }
        
       
    }