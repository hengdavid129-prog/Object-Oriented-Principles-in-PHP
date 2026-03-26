<?php

class User
{
    private(set) string $email {
        get => str_replace('@', '(at', $this->email);
    }

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function updateEmail(string $email)
    {
        $this->email = $email;
    }
}

$user = new User('hengdavid129@gmail.com');

$user->updateEmail('hengdavid129@gmail.con');

echo $user->email;