<?php

class Validator
{
    public $errors = [];

    public function user_inputs($arr)
    {
        $this->email($arr['email']);
        $this->phoneNumber($arr['phoneNumber']);
        $this->dateOfBirth($arr['dateOfBirth']);
        $this->address($arr['address']);
    }
    public function email($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = 'Invalid email.';
        }
    }

    public function phoneNumber($phoneNumber)
    {
        if (strlen($phoneNumber) != 10 || !filter_var($phoneNumber, FILTER_VALIDATE_INT)) {
            $this->errors['phoneNumber'] = "Please input a valid phoneNumber";
        }
    }

    public function address($address)
    {
        if (empty($address)) {
            $this->errors["address"] = "Please input a valid address.";
        }
    }

    public function dateOfBirth($dateOfBirth)
    {
        if ($dateOfBirth === date("Y-m-d", strtotime($dateOfBirth))) return;
        $this->errors["dateOfBirth"] = "Please input a valid date of birth";
    }
}
