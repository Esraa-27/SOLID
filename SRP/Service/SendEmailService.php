<?php

namespace SRP\Service;
require_once __DIR__ . '/../../AutoLoad.php';

use SRP\Model;

class SendEmailService
{
    public function send(string $sender, string $receiver, string $subject, string $body): bool
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

    protected function createEmail(string $sender, string $receiver, string $subject, string $body)
    {
        if (empty($subject) || empty($body))
            return null;
        $email = new Model\Email();
        $email->sender = $sender;
        $email->receiver = $receiver;
        $email->subject = $subject;
        $email->body = $body;

        return $email;
    }

}