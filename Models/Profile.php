<?php

class Profile extends User
{
    public function __construct(public string $name, public string $lastname, protected string $email)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
    }
}
