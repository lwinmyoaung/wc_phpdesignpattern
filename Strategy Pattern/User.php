<?php

require_once __DIR__ . "/Notify.php";
require_once __DIR__ . "/EmailNotify.php";
require_once __DIR__ . "/PhoneNotify.php";
require_once __DIR__ . "/SmsNotify.php";
require_once __DIR__ . '/Notifier.php';
require_once __DIR__ . '/EmailUser.php';
require_once __DIR__ . '/PhoneUser.php';
require_once __DIR__ . '/SmsUser.php';

// class User
// {
//     public function __construct($type)
//     {
//         // // obj ကို manually ခနခန create လုပ်နေရမယ်
//         // $obj = new EmailNotify();
//         // $obj->send();

//         // // Dynamically ပုံစံပြောင်း
//         // $obj = null;
//         // switch($type)
//         // {
//         //     case 'Email':
//         //         $obj = new EmailNotify();
//         //         break;
//         //     case 'Phone':
//         //         $obj = new PhoneNotify();
//         //         break;
//         //     case 'SMS':
//         //         $obj = new SmsNotify();
//         //         break;
//         //     default:
//         //         echo "Invalid notification type";
//         //         return;
//         // }
//         // $obj->send();

//         // Encapsulate လုပ်
        
//         $notifier = new Notifier();
        
//         $obj = null;
//         switch($type)
//         {
//             case 'Email':
//                 $obj = new EmailNotify();
//                 break;
//             case 'Phone':
//                 $obj = new PhoneNotify();
//                 break;
//             case 'SMS':
//                 $obj = new SmsNotify();
//                 break;
//             default:
//                 echo "Invalid notification type";
//                 return;
//         }

//         // $notifier->changeNotiType(new EmailNotify());
//         $notifier->changeNotiType($obj);
//         $notifier->sendNow();
//     }
// }

// new User(type: 'SMS');
// echo "<br>";
// new User(type: 'Phone');
// echo "<br>";
// new User(type: 'Email');

// Final class Encapsulate and Interchangeable
class User
{
    public function __construct()
    {
        $obj = new EmailUser();
        $obj->sendNow();

        // Interchange
        $obj1 = new PhoneUser();
        $obj1->changeNotiType(new SmsNotify());
        $obj1->sendNow();
    }
}

new User;