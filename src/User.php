<?php
//src/User.php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity]
#[ORM\Table(name: 'users')]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private int|null $id=null;

    #[ORM\Column(type: 'string')]
    private string $name;

    #[ORM\OneToMany(targetEntity: Bug::class,mappedBy: 'reporter')]
    private $reportedBugs;

    #[ORM\OneToMany(targetEntity: Bug::class,mappedBy: 'engineer')]
    private $assignedBugs;

    public function __construct()
    {
        $this->reportedBugs = new ArrayCollection();
        $this->assignedBugs = new ArrayCollection();
    }

    public function addReportedBug(Bug $bug): void
    {
        $this->reportedBugs[] = $bug;
    }
    public function assignedToBug(Bug $bug): void
    {
        $this->assignedBugs[] = $bug;
    }
    
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
        $this->name=$name;
    }
}