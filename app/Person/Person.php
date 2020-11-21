<?php

declare(strict_types=1);

namespace app\Person;

class Person
{
    private $identificationNumber;
    private $firstName;
    private $lastName;

    public function __construct(
        $anIdentificationNumber, $aFirstName, $aLastName
    )
    {
        $this->identificationNumber = $anIdentificationNumber;
        $this->firstName = $aFirstName;
        $this->lastName = $aLastName;
    }

    public function identificationNumber()
    {
        return $this->identificationNumber;
    }

    public function firstName()
    {
        return $this->firstName;
    }

    public function lastName()
    {
        return $this->lastName;
    }
}