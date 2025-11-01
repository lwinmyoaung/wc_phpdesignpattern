<?php

class SmsUser extends Notifier
{
    public function __construct()
    {
        $this->notification = new SmsNotify();
    }
}