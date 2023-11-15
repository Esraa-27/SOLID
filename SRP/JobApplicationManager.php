<?php
//require_once __DIR__ . '/SendEmailService.php';
use SRP\Service;
class JobApplicationManager
{
    public $emailSender;
    public function __construct()
    {
        $this->emailSender=new Service\SendEmailService();

    }

    public function addApplication(object $data)
    {
        // set application data in  application model
        // implement business
        $receiver = 'user email';
        try {
            $this->sendConfirmationMail($receiver ,  "your application submitted successfully"  ,  "body");
            echo "application submitted successfully";
        } catch (Exception $e) {
            return $e;
        }

    }

    protected function sendConfirmationMail(string $receiver  , string $subject  , string $body )
    {
        return $this->emailSender->send("my email" ,$receiver , $subject , $body);

    }

    public function removeApplication()
    {
        // implement business
        //use  sendConfirmationMail() with "your application removed successfully " as subject
    }

}