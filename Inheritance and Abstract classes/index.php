<?php

class Notification
{
    public function __construct(public string $message)
    {
        //
    }

    public function send()
    {
        echo 'Show popup flash message';
    }
}

class EmailNotification extends Notification
{
    public function send()
    {
        echo 'Fire off and email notification';
    }
}

class OSNotification extends Notification
{
    public function send()
    {
        echo 'Dispatch an OS-specific notification.';
    }
}

$notificaton = new EmailNotification('here is my notification');
$notificaton->send();