<?php

namespace classes;

class User
{
  public $firstName;
  public $lastName;
  public $email;

  public function getFisrtName()
  {
      return $this->firstName;
  }

  public function setFirstName($firstName)
  {
      $this->firstName = filter_var($firstName, FILTER_SANITIZE_STRIPPED);
  }


    public function getLastName()
    {
        return $this->lastName;
    }


    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }else {
            return false;
        }
    }


}