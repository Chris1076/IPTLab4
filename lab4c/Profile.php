<?php
/**
 * This class is intenionally written as incomplete, students should be able to provide the missing properties and methods to this class
 */
class Profile
{
    protected $first_name;
    protected $middle_name;
    protected $last_name;
    protected $email;
    protected $contact_number;
    protected $address;
    protected $favorite_quote;


    public function __construct($lastname, $firstname, $middle){
        $this->first_name = $firstname;
        $this->last_name = $lastname;
        $this->middle_name = $middle;
    }
    public function getCompleteName($format = '{last}, {first} {middle}')
    {
        $full_name = $format;
        $full_name = str_replace('{last}', $this->getLastName(), $full_name);
        $full_name = str_replace('{first}', $this->getFirstName(), $full_name);
        $full_name = str_replace('{middle}', $this->getMiddleName(), $full_name);
        return $full_name;
    }
    
    public function setAddress($address)
    {
        $this->address = $address;
    }
    public function getAddress()
    {
        return $this->address;
    }
    
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function setContactNumber($number)
    {
        $this->contact_number = $number;
    }
    public function getContactNumber()
    {
        return $this->contact_number;
    }

    protected function getFirstName()
    {
        return $this->first_name;
    }
    protected function getMiddleName()
    {
        return $this->middle_name;
    }
    protected function getLastName()
    {
        return $this->last_name;
    }

    public function setFavoriteQuote($quote)
    {
        $this->favorite_quote = $quote;
    }
    public function getFavoriteQuote()
    {
        return $this->favorite_quote;
    }
}