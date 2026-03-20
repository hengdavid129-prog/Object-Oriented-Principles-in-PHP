<?php

// Inheritance

// class Notification
// {
//     public function __construct(public string $message)
//     {
//         //
//     }

//     public function send()
//     {
//         echo 'Show popup flash message';
//     }
// }

// class EmailNotification extends Notification
// {
//     public function send()
//     {
//         echo 'Fire off and email notification';
//     }
// }

// class OSNotification extends Notification
// {
//     public function send()
//     {
//         echo 'Dispatch an OS-specific notification.';
//     }
// }

// $notificaton = new EmailNotification('here is my notification');
// $notificaton->send();

// Abstract Classes

class User {}

abstract class Achievement
{
    public function __construct(
        public string $name,
        public string $description,
        public string $icon
    ) {
        //
    }

    abstract public function qualifier(User $user);
}

class FirstPostAchievment extends Achievement
{
    public function qualifier(User $user)
    {
        // TODO: Implement qualifier() method.
    }
}

class TalkativeAchievment extends Achievement
{
    public function qualifier(User $user)
    {
        // $user->comments()->count() >= 200;
    }
}

$firstPost = new FirstPostAchievment(
    'First Post',
    'Granted when you create your first post.',
    'first-post.svg'
);

echo $firstPost->qualifier(new User) ? 'They qualify' : 'They do not qualify';