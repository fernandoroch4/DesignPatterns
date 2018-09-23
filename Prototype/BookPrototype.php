<?php
namespace DesignPatterns\Prototype;

abstract class BookPrototype 
{
    protected $title;
    protected $subject;
    protected $owner;

    abstract public function __clone();

    public function getTitle()
    {
        return $this->title;    
    }
    public function getSubject()
    {
        return $this->subject;
    }
    public function getOwner()
    {
        return $this->owner;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }
    public function setSubject(string $subject)
    {
        $this->subject = $subject;
    }
    public function setOwner(string $owner)
    {
        $this->owner = $owner;
    }
}