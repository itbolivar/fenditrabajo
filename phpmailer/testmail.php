<?php 

use phpmailer\src\Exception;
use phpmailer\src\PHPMailer;
use phpmailer\src\SMTP;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';



class enviarEmail{
    /**/
    private PHPMailer $mail;
    
    
    /*Configuracion de Servidor*/
    private $hots       = 'smtp.hostinger.com';
    private $username   = 'info@fenditrabajo.com';     
    private $password   = 'neImHLB#2i!Cc$Y*idy';
    private $port       = 465;
    
    /*Envio de Email*/
    private $subjet     = 'Here is the subject';
    private $body       = 'This is the HTML message body <b>in bold!</b>';
    private $altBody    = 'This is the body in plain text for non-HTML mail clients';
        
    
    public function __construct(){
        $this->mail = new PHPMailer(true);
    }
    
    public static function getInstance()
    {
        if (!self::$instance instanceof self ) {
            self::$instance = new enviarEmail();
        }
        return enviarEmail::$instance;
    }
    
    private function initMailServer(){
        
        //Server settings
        $this->mail->SMTPDebug = SMTP::DEBUG_SERVER;              //Enable verbose debug output
        $this->mail->isSMTP();                                    //Send using SMTP
        $this->mail->Host       = $this->hots;                    //Set the SMTP server to send through
        $this->mail->SMTPAuth   = true;                           //Enable SMTP authentication
        $this->mail->Username   = $this->username;                //SMTP username
        $this->mail->Password   = $this->password;                //SMTP password
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $this->mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
        
    }
    
    public function sendEmail()
    {
        try {
        $this->initMailServer();
        
        //Recipients
        $this->mail->setFrom('info@fenditrabajo.com', 'Fenditrabajo');
        $this->mail->addAddress('it.bolivar@fondosoldicom.org', 'Joe User');     //Add a recipient
        //$this->mail->addAddress('ellen@example.com');               //Name is optional
        $this->mail->addReplyTo('ingluiseduardojaravavillarreal@gmail.com', 'Information');
       
        //Copìa Oculta    
       
        // $this->mail->addCC('cc@example.com');
        // $this->mail->addBCC('bcc@example.com');
        
        //Content
        $this->mail->isHTML(true);                                  //Set email format to HTML
        $this->mail->Subject = $this->subjet;
        $this->mail->Body    = $this->body;
        $this->mail->AltBody = $this->altBody;
        
        //Attachments
        /*$this->mail->addAttachment('/var/tmp/file.tar.gz');         Add attachments
         $this->mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name*/
        
        $this->mail->send();
        
        echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$this->mail->ErrorInfo}";
        }
        
    }
}


$m = enviarEmail::getInstance();
$m->sendEmail();



?>