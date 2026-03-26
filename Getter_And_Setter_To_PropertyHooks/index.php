<?php

class User
{
    // Constructor property promotion
    public function __construct(private string $email)
    {

    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        if (! filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            throw new InvalidArgumentException('Email must be valid.');
        }
        $this->email = $email;
    }
}

$user = new User('hengdavid129@gmail.com');

$user->setEmail('hengdavid001@gmail.com');

echo $user->getEmail();