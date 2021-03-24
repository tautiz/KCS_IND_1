<?php

namespace KCS\Dtos;

class VisitorDto
{
    public string $name;
    public string $phone;
    public string $email;

    public function toArray(): array
    {
        return [
            'name' => $this->name,
        ];
    }
}
