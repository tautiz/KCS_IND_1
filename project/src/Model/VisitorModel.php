<?php

namespace KCS\Model;

class VisitorModel implements ToStringInterface
{
    private int $id;

    private string $name;

    private string $email;

    private string $phone;

    private string $created_at;

    private string $updated_at;

    private ?string $deleted_at;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    /**
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updated_at;
    }

    /**
     * @return string|null
     */
    public function getDeletedAt(): ?string
    {
        return $this->deleted_at;
    }

    /**
     * @param  string  $name
     *
     * @return VisitorModel
     */
    public function setName(string $name): VisitorModel
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param  string  $email
     *
     * @return VisitorModel
     */
    public function setEmail(string $email): VisitorModel
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @param  string  $phone
     *
     * @return VisitorModel
     */
    public function setPhone(string $phone): VisitorModel
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @param  string  $updated_at
     *
     * @return VisitorModel
     */
    public function setUpdatedAt(string $updated_at): VisitorModel
    {
        $this->updated_at = $updated_at;
        return $this;
    }

    /**
     * @param  string|null  $deleted_at
     *
     * @return VisitorModel
     */
    public function setDeletedAt(?string $deleted_at): VisitorModel
    {
        $this->deleted_at = $deleted_at;
        return $this;
    }

    public function __toString(): string
    {
        return $this->name . ' ' . $this->email;
    }
}
