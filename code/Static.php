<?php 

class Email{
    public static $total_number = 100;

    public function getNumber(){
        return self::$total_number;
    }

    public static function sendEmail(){
        return 'Email Send';
    }
}

print Email::sendEmail();       // Output: Email Send
print Email::$total_number;     // Output: 100

$email = new Email;
print $email->getNumber();      // Output: 100