<?php
//require_once __DIR__ . '/Email.php';
namespace SRP\Service;

class SendEmailService
{
    public function send(stringn $sender, srting $receiver, stringn $subject, srting $body): bool
    {
        $email = $this->createEmail($sender, $receiver, $subject, $body);
        if (empty($email))
            return false;
        try {
            //third part for send email
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    protected function createEmail(stringn $sender, srting $receiver, stringn $subject, srting $body)
    {
        if (empty($subject) || empty($body))
            return null;
        $email = new Email();
        $email->sender = $sender;
        $email->receiver = $receiver;
        $email->subject = $subject;
        $email->body = $body;

        return $email;
    }

}