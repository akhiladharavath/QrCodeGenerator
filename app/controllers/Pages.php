<?php
 require "../vendor/autoload.php";

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\ErrorCorrectionLevel;
class Pages extends Controller{
    protected $userModel;
    public function __construct() {
     
     $this->userModel = $this->model('User');
 }
 public function index(){
     $this->view('pages/index');
     
     
 }
 
 public function generator(){
      if (isLoggedIn()) {
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $action = isset($_POST['action']) ? $_POST['action'] : '';

            switch ($action) {
                case 'url':
                    $url = isset($_POST['url']) ? $_POST['url'] : '';
                    $generatedQRCode = $this->generateURLQR($url);
                    break;

                case 'text':
                    $text = isset($_POST['text']) ? $_POST['text'] : '';
                    $generatedQRCode = $this->generateTextQR($text);
                    break;

                case 'whatsapp':
                     $number = $_POST['whatsapp'];
                     $message = $_POST['message'];
                    $generatedQRCode = $this->generateWhatsAppQR($number, $message);
                    break;

                case 'instagram':
                    $username = isset($_POST['instagram_username']) ? $_POST['instagram_username'] : '';
                    $generatedQRCode = $this->generateInstagramQR($username);
                    break;

                case 'linkedin':
                    $profileUrl = $_POST['linkedin'];
                    $generatedQRCode = $this->generateLinkedInQR($profileUrl);
                    break;
                case 'email':
                    $to = $_POST['to'];
                    $subject = $_POST['subject'];
                    $body = $_POST['body'];
                    $generatedQRCode = $this->generateEmailQR($to, $subject, $body);
                    break;

                case 'facebook':
                        $facebookUrl = $_POST['facebook'];
                        $generatedQRCode = $this->generateFacebookQR($facebookUrl);
                        break;
                    case 'pdf':
    // Check if a file has been uploaded
    if (isset($_FILES['pdfFile'])) {
        // Save the uploaded PDF to a publicly accessible directory
        $targetDir = "uploads/";
        if (!file_exists($targetDir)) {
    mkdir($targetDir, 0755, true);
}
        $targetFile = $targetDir . basename($_FILES["pdfFile"]["name"]);
        if (move_uploaded_file($_FILES["pdfFile"]["tmp_name"], $targetFile)) {
            // Generate a QR code that links to the uploaded PDF
            $pdfUrl = 'http://yourwebsite.com/' . $targetFile;
            $generatedQRCode = $this->generatePdfQR($pdfUrl);
        } else {
            // Handle error - file not moved
            $error = "File could not be uploaded.";
        }
    }
    break;

                    default:
                    $this->view('pages/generator', ['error' => 'Invalid action']);
                    return;
            }

            // Your common QR code generation logic goes here (if any)
if ($generatedQRCode !== null) {  // Check if $generatedQRCode is not null
    $this->view('pages/generator', ['qrCode' => $generatedQRCode]);
} else {
    // handle the case when $generatedQRCode is null, e.g., show an error message
    $this->view('pages/generator', ['error' => 'QR Code not generated']);
}
        } else {
            $this->view('pages/generator');
        }
      }
        else{
     redirect('pages/login');
 } 

 }
 
public function generatePdfQR($pdfUrl)
{
    if (isLoggedIn()) {
        // Implement your PDF QR code generation logic here
        // Example: http://yourwebsite.com/uploads/file.pdf
        $url = $pdfUrl;

        // Create a new QR code instance
        $qrCode = new \Endroid\QrCode\QrCode($url);

        // Set additional QR code properties (if needed)
        $qrCode->setSize(200);
        $qrCode->setErrorCorrectionLevel(ErrorCorrectionLevel::HIGH);

        // Generate the QR code as a PNG image
        $pngData = $qrCode->writeString();
        
        // Get QR Code image as base64 string
        $base64 = base64_encode($pngData);

        return $base64;
    } else {
        redirect('pages/login');
    }
}
public function generateTextQR(){
   if (isLoggedIn()) {
        
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["text"])) {
        $text = $_POST["text"];

        $qrCode = QrCode::create($text)
            ->setSize(200)
            ->setMargin(20)
           // ->setForegroundColor(new Color(255, 125, 0))
            //->setBackgroundColor(new Color(143, 200, 243))
            ->setErrorCorrectionLevel(ErrorCorrectionLevel::High);
        
       // $label = Label::create("this is a label");
           // ->setTextColor(new Color(255,0,0));

        

        $writer = new PngWriter;
        $result = $writer->write($qrCode);

        // Get QR Code image as base64 string
        $base64 = base64_encode($result->getString());
        return $base64;
        // Pass base64 string to the view
      /*  $this->view('pages/generator', ['qrCode' => $base64]);
    } else {
        $this->view('pages/generator');
    } */
 }
 else{
     redirect('pages/login');
 } 
 }
}
    

 
 
 
 
 public function generateURLQR($url)
{
    if (isLoggedIn()) {
        // Implement your URL QR code generation logic here
        $qrCode = QrCode::create($url)
            ->setSize(200)
            ->setMargin(20)
            ->setErrorCorrectionLevel(ErrorCorrectionLevel::High);
        

        $writer = new PngWriter;
        $result = $writer->write($qrCode);

        // Get QR Code image as base64 string
        $base64 = base64_encode($result->getString());

        return $base64;
    } else {
        redirect('pages/login');
    }
}
public function generateEmailQR($to, $subject, $body)
{
    if (isLoggedIn()) {
        // Create a mailto: link
        $link = 'mailto:' . $to . '?subject=' . rawurlencode($subject) . '&body=' . rawurlencode($body);
        echo $link;
        // Generate the QR code
        $qrCode = QrCode::create($link)
            ->setSize(200)
            ->setMargin(20)
            ->setErrorCorrectionLevel(ErrorCorrectionLevel::High);

        $writer = new PngWriter;
        $result = $writer->write($qrCode);

        // Get QR Code image as base64 string
        $base64 = base64_encode($result->getString());

        return $base64;
    } else {
        redirect('pages/login');
    }
}

public function generateWhatsAppQR($number, $message)
{
    var_dump($number);
        var_dump($message); 
    if (isLoggedIn()) {
        var_dump($number);
        var_dump($message); 
        // Implement your WhatsApp QR code generation logic here
        $url = "https://wa.me/{$number}?text=" . urlencode($message);
         // Print the URL
        echo $url;
        // Or use print_r
        // print_r($url);

        $qrCode = QrCode::create($url)
            ->setSize(200)
            ->setMargin(20)
            ->setErrorCorrectionLevel(ErrorCorrectionLevel::High);

        $writer = new PngWriter;
        $result = $writer->write($qrCode);

        // Get QR Code image as base64 string
        $base64 = base64_encode($result->getString());

        return $base64;
    } else {
        redirect('pages/login');
    }
}

public function generateInstagramQR($username)
{
    if (isLoggedIn()) {
        // Implement your Instagram QR code generation logic here
        // Example: https://www.instagram.com/username/
        $url = "https://www.instagram.com/{$username}/";

        $qrCode = QrCode::create($url)
            ->setSize(200)
            ->setMargin(20)
            ->setErrorCorrectionLevel(ErrorCorrectionLevel::High);

        $writer = new PngWriter;
        $result = $writer->write($qrCode);

        // Get QR Code image as base64 string
        $base64 = base64_encode($result->getString());

        return $base64;
    } else {
        redirect('pages/login');
    }
}

public function generateLinkedInQR($profileUrl)
{
    if (isLoggedIn()) {
        // Implement your LinkedIn QR code generation logic here
        // Example: https://www.linkedin.com/in/username/
        $url = $profileUrl;

        $qrCode = QrCode::create($url)
            ->setSize(200)
            ->setMargin(20)
            ->setErrorCorrectionLevel(ErrorCorrectionLevel::High);

        $writer = new PngWriter;
        $result = $writer->write($qrCode);

        // Get QR Code image as base64 string
        $base64 = base64_encode($result->getString());

        return $base64;
    } else {
        redirect('pages/login');
    }
}


public function generateFacebookQR($facebookUrl)
{
    if (isLoggedIn()) {
        // Implement your Facebook QR code generation logic here
        // Example: https://www.facebook.com/username/
        $url = $facebookUrl;

        $qrCode = QrCode::create($url)
            ->setSize(200)
            ->setMargin(20)
            ->setErrorCorrectionLevel(ErrorCorrectionLevel::High);

        $writer = new PngWriter;
        $result = $writer->write($qrCode);

        // Get QR Code image as base64 string
        $base64 = base64_encode($result->getString());

        return $base64;
    } else {
        redirect('pages/login');
    }
}

 
 
 
 
 
 public function about($id=null){
       if (isLoggedIn()) {
     echo $id;
    
     $this->view('pages/about');
 }
 else{
     redirect('pages/login');
 }
 }
  public function register(){
      
     
      // Check for POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
  
        // Sanitize POST data
        $_POST['name'] = htmlspecialchars(trim($_POST['name']));
        $_POST['email'] = htmlspecialchars(trim($_POST['email']));
        $_POST['password'] = htmlspecialchars(trim($_POST['password']));
        $_POST['confirm_password'] = htmlspecialchars(trim($_POST['confirm_password']));


        // Init data
        $data =[
          'name' => trim($_POST['name']),
          'email' => trim($_POST['email']),
          'password' => trim($_POST['password']),
          'confirm_password' => trim($_POST['confirm_password']),
          'name_err' => '',
          'email_err' => '',
          'password_err' => '',
          'confirm_password_err' => ''
        ];

        // Validate Email
        if(empty($data['email'])){
          $data['email_err'] = 'Pleae enter email';
        } 

        // Validate Name
        if(empty($data['name'])){
          $data['name_err'] = 'Pleae enter name';
        }

        // Validate Password
        if(empty($data['password'])){
          $data['password_err'] = 'Pleae enter password';
        } elseif(strlen($data['password']) < 6){
          $data['password_err'] = 'Password must be at least 6 characters';
        }

        // Validate Confirm Password
        if(empty($data['confirm_password'])){
          $data['confirm_password_err'] = 'Pleae confirm password';
        } else {
          if($data['password'] != $data['confirm_password']){
            $data['confirm_password_err'] = 'Passwords do not match';
          }
        }

        // Make sure errors are empty
        if(empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])){
          // Validated
          
          // Hash Password
          $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

          // Register User
          if($this->userModel->register($data)){
            flash('register_success', 'You are registered and can log in');
            redirect('users/login');
          } else {
            die('Something went wrong');
          }

        } else {
          // Load view with errors
          $this->view('pages/register', $data);
        }

      } else {
        // Init data
        $data =[
          'name' => '',
          'email' => '',
          'password' => '',
          'confirm_password' => '',
          'name_err' => '',
          'email_err' => '',
          'password_err' => '',
          'confirm_password_err' => ''
        ];

        // Load view
        $this->view('pages/register', $data);
      }
    }

    public function login(){
        if (!isLoggedIn()) {
        
      // Check for POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
        // Sanitize POST data
        $_POST['email'] = htmlspecialchars(trim($_POST['email']));
        $_POST['password'] = htmlspecialchars(trim($_POST['password']));
        // Init data
        $data =[
          'email' => trim($_POST['email']),
          'password' => trim($_POST['password']),
          'email_err' => '',
          'password_err' => '',      
        ];

        // Validate Email
        if(empty($data['email'])){
          $data['email_err'] = 'Pleae enter email';
        }

        // Validate Password
        if(empty($data['password'])){
          $data['password_err'] = 'Please enter password';
        }

        // Check for user/email
        if($this->userModel->findUserByEmail($data['email'])){
          // User found
        } else {
          // User not found
          $data['email_err'] = 'No user found';
        }

        // Make sure errors are empty
        if(empty($data['email_err']) && empty($data['password_err'])){
          // Validated
          // Check and set logged in user
          $loggedInUser = $this->userModel->login($data['email'], $data['password']);

          if($loggedInUser){
            // Create Session
            $this->createUserSession($loggedInUser);
          } else {
            $data['password_err'] = 'Password incorrect';

            $this->view('pages/login', $data);
          }
        } else {
          // Load view with errors
          $this->view('pages/login', $data);
        }


      } else {
        // Init data
        $data =[    
          'email' => '',
          'password' => '',
          'email_err' => '',
          'password_err' => '',        
        ];

        // Load view
        $this->view('pages/login', $data);
      }
    }
    }
    public function createUserSession($user){
      $_SESSION['user_id'] = $user->id;
      $_SESSION['user_email'] = $user->email;
      $_SESSION['user_name'] = $user->name;
      redirect('pages');
    }

    public function logout(){
      unset($_SESSION['user_id']);
      unset($_SESSION['user_email']);
      unset($_SESSION['user_name']);
      session_destroy();
      redirect('pages/login');
    }
    
/*    public function generateWhatsAppQR(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $number = $_POST['number'];
    $message = $_POST['message'];
    
    if (empty($number) || empty($message)) {
        echo "Number and message are required.";
    } else {
        $url = "https://wa.me/{$number}?text=" . urlencode($message);
        $qrCode = QrCode::create($url)
                        ->setSize(200)
                        ->setMargin(20)
                        ->setErrorCorrectionLevel(ErrorCorrectionLevel::High);
        
        $label = Label::create("WhatsApp QR Code")
    ->setTextColor(new Color(255, 0, 0));
          $writer = new PngWriter;
$result = $writer->write($qrCode, label:$label);



$base64 = base64_encode($result->getString());

return $base64;

    // Pass data to the view
  /*  $this->view('Pages/generator', [
        'qrCodeImage' => $base64,
    ]);*/
        


    
   /*  
    }
}
    }
    
    
    
  public function Email(){
      
  }
   public function Sms(){
      
  }
   public function Url(){
      
  }*/
   
}

