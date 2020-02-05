<?php
namespace Calendar;


class Event {

    private $id;

    private $name;

    private $description;

    private $start;

    private $end;

    

    /**
     * Get the value of id
     */ 
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */ 
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription(): string
    {
        return $this->description ?? '';
    }

    /**
     * Get the value of start
     */ 
    public function getStart(): \DateTime
    {
        return new \DateTime($this->start);
    }

    /**
     * Get the value of end
     */ 
    public function getEnd(): \DateTime
    {
        return new \DateTime($this->end);
    }
}