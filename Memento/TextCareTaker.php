<?php

namespace DesignPatterns\Memento;

class TextCareTaker
{
    protected $textStates = [];

    public function addMemento(TextMemento $textMemento)
    {
        $this->textStates[] = $textMemento;
    }
    public function getLastSaveState(): TextMemento
    {
        if (empty($this->textStates)) {
            return null;
        }
        $textMemento = end($this->textStates);
        unset($this->textStates[sizeof($this->textStates) - 1]);
        return $textMemento;
    }
}