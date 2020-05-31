<?php

abstract class Mail {
    abstract function sendMail();
    abstract function numberOfEmail($int) : int;
}

class SendEmail extends Mail{

    public function sendMail(){
        return 'Send Email';
    }

    public function numberOfEmail($int): int{
        return $int;
    }

}
$sendEmail = new SendEmail;
echo $sendEmail->sendMail();          // Output: Send Email
echo $sendEmail->numberOfEmail(10);   // Output: 10