<?php

interface Mail{
    public function sendMail();
}

class SendEmail implements Mail{

    public function sendMail(){
        return true;
    }

    public function send(){
        return 'Send Email';
    }
}

$email = new SendEmail;
echo $email->send();