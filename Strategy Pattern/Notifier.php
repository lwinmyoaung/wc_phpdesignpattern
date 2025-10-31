<?php

// class Notifier

// encapsulate အတွက် abstract class ချိန်း
abstract class Notifier
{
    protected $notification;

    public function sendNow()
    {
        $this->notification->send();
    }

    public function changeNotiType(Notify $notify)
    {
        $this->notification = $notify;
    }
}