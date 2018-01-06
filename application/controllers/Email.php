<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
  /**
   *
   */
class Email extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('MyPHPMailer'); // load library
    }
	
	function index(){
		echo '1';
	}
    function emailSend(){
        $fromEmail = "okkisetyawan@gmail.com";
        $isiEmail = "Olalaaa yeee emailnya ditulis disini";
        $mail = new PHPMailer();
        $mail->IsHTML(true);    // set email format to HTML
        $mail->IsSMTP();   // we are going to use SMTP
        $mail->SMTPAuth   = true; // enabled SMTP authentication
        $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
        $mail->Host       = "smtp.gmail.com";      // setting GMail as our SMTP server
        $mail->Port       = 465;                   // SMTP port to connect to GMail
        $mail->Username   = $fromEmail;  // alamat email kamu
        $mail->Password   = "Katerban_93";            // password GMail
        $mail->SetFrom('info@yourdomain.com', 'noreply');  //Siapa yg mengirim email
        $mail->Subject    = "Subjek email";
        $mail->Body       = $isiEmail;
        $toEmail = "okkisetyawan@gmail.com"; // siapa yg menerima email ini
        $mail->AddAddress($toEmail);
       
        if(!$mail->Send()) {
            echo "Eror: ".$mail->ErrorInfo;
        } else {
            echo "Email berhasil dikirim";
        }
    }
}
?>