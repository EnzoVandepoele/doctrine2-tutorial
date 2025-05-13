<?php
//src/User.php

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'users')]
class User
{
    /**@var int*/
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private int|null $id=null;

    /**@varstring*/
    #[ORM\Column(type: 'string')]
    private string $name;

    public function getId(): int|null
    {
        return$this->id;
    }

    public function getName(): string
    {
        return$this->name;
    }

    public function setName(string $name):void
    {
        $this->name =$name;
    }
}