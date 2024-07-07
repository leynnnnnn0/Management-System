<?php

abstract class Person
{
    private $id;
    private $fullName;
    private $emailAddress;
    private $phoneNumber;
    private $address;
    private $dateOfBirth;

    public function __construct($fullName, $emailAddress, $phoneNumber, $address, $dateOfBirth)
    {
        $this->fullName = $fullName;
        $this->emailAddress = $emailAddress;
        $this->phoneNumber = $phoneNumber;
        $this->address = $address;
        $this->dateOfBirth = $dateOfBirth;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFullName(){
        return $this->fullName;
    }

    public function getEmailAddress(){
        return $this->emailAddress;
    }
    public function getPhoneNumber(){
        return $this->phoneNumber;
    }
    public function getAddress(){
        return $this->address;
    }
    public function getDateOfBirth(){
        return $this->dateOfBirth;
    }
}