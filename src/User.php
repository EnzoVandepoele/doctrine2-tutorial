<?php
//src/User.php

use Doctrine\ORM\Mapping as ORM;
 use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity]
#[ORM\Table(name: 'users')]
class User
{
    private $reportedBugs = null;
    private $assignedBugs = null;

    public function __construct()
    {
        $this->reportedBugs = new ArrayCollection();
        $this->assignedBugs = new ArrayCollection();
    }

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