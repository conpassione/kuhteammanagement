<?php
declare(strict_types=1);

namespace Conpassione\kuhteammanagement\Domain\DTO;

class neuesTeam
{
    protected int $uid;
    protected string $lastname;
    protected string $firstname;
    protected string $mobile;
    protected string $email;
    protected string $message;
    protected string $dog;
    protected string $breed;
    protected mixed $birthdate;

    public function __construct(
        int $uid,
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
        $this->uid = 0;
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
            0,
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '0'
        );

    }

    public function getUid(): int
    {
        return $this->uid;
    }

    /**
     * @param int $uid
     * @return void
     */
    public function setUid(int $uid): void
    {
        $this->uid = $uid;
    }

    public function getLastName(): string
    {
        return $this->lastname;
    }

    /**
     * @param string  $lastname
     * @return void
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    public function getFirstName(): string
    {
        return $this->firstname;
    }

    /**
     * @param string  $firstname
     * @return void
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    public function getMobile(): string
    {
        return $this->mobile;
    }

    /**
     * @param string  $mobile
     * @return void
     */
    public function setMobile(string $mobile): void
    {
        $this->mobile = $mobile;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return void
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return void
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }
    public function getDog(): string
    {
        return $this->dog;
    }

    /**
     * @param string $dog
     * @return void
     */
    public function setDog(string $dog): void
    {
        $this->dog = $dog;
    }

    public function getBreed(): string
    {
        return $this->breed;
    }

    /**
     * @param string $breed
     * @return void
     */
    public function setBreed(string $breed): void
    {
        $this->breed = $breed;
    }

    public function getBirthdate(): mixed
    {
        return $this->birthdate;
    }

    /**
     * @param mixed $birthdate
     * @return void
     */
    public function setBirthdate(mixed $birthdate): void
    {
        $this->birthdate = $birthdate;
    }
}
