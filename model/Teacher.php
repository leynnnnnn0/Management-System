<?php

class Teacher extends Person
{
    private $subject;
    public function __construct($fullName, $emailAddress, $phoneNumber, $address, $dateOfBirth, $subject)
    {
        parent::__construct($fullName, $emailAddress, $phoneNumber, $address, $dateOfBirth);
        $this->subject = $subject;
    }

    public function getSubject()
    {
        return $this->subject;
    }
}