<?php

class Student extends Person
{
    public function __construct($fullName, $emailAddress, $phoneNumber, $address, $dateOfBirth)
    {
        parent::__construct($fullName, $emailAddress, $phoneNumber, $address, $dateOfBirth);
    }
}
