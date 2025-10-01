<?php

namespace Conpassione\kuhteammanagement\Domain\DTO;


class NeuesTeam
{
    protected string $lastname;
    protected string $firstname;
    protected string $mobile;
    protected string $email;
    protected string $message;
    protected string $dog;
    protected string $breed;
    protected mixed $birthdate;

    public function __construct(
        string $lastname,
        string $firstname,
        string $mobile,
        string $email,
        string $message,
        string $dog,
        string $breed,
        mixed $birthdate,
    )
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->mobile = $mobile;
        $this->email = $email;
        $this->message = $message;
        $this->dog = $dog;
        $this->breed = $breed;
        $this->birthdate = $birthdate;
    }

    public static function createEmpty(): self
    {
        return new self(
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            null
        );

    }

    function getLastName(): string
    {
        return $this->lastname;
    }

    function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    function getFirstName(): string
    {
        return $this->firstname;
    }

    function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    function getMobile(): string
    {
        return $this->mobile;
    }
    function setMobile(string $mobile): void
    {
        $this->mobile = $mobile;
    }

    function getEmail(): string
    {
        return $this->email;
    }

    function setEmail(string $email): void
    {
        $this->email = $email;
    }
    function getMessage(): string
    {
        return $this->message;
    }
    function setMessage(string $message): void
    {
        $this->message = $message;
    }
    function getDog(): string
    {
        return $this->dog;
    }
    function setDog(string $dog): void
    {
        $this->dog = $dog;
    }
    function getBreed(): string
    {
        return $this->breed;
    }
    function setBreed(string $breed): void
    {
        $this->breed = $breed;
    }
    function getBirthdate(): mixed
    {
        return $this->birthdate;
    }
    function setBirthdate(mixed $birthdate): void
    {
        $this->birthdate = $birthdate;
    }
}
