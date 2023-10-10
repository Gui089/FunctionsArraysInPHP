<?php

namespace Source\Qualifield;

class User
{
    private $firstName;
    private $lastName;
    private $email;

    private $error;

    public function setUser($firstName, $lastName, $email)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);

        if(!$this->setEmail($email)) {
            $this->error = "O e-mail {$this->getEmail()} nao e valido!";
            return false;
        }

        return true;
    }

    /**
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }



    public function getFisrtName()
    {
        return $this->firstName;
    }

    private function setFirstName($firstName)
    {
        $this->firstName = filter_var($firstName, FILTER_SANITIZE_STRIPPED);
    }


    public function getLastName()
    {
        return $this->lastName;
    }


    private function setLastName($lastName)
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