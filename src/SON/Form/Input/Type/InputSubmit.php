<?php

namespace SON\Form\Input\Type;

use SON\Form\Input\InputInterface;

class InputSubmit implements InputInterface
{
    private $id;
    private $name;
    private $class;
    private $value;
    private $label;
    private $placeholder;
    private $required;
    private $type = "submit";

    public function __construct($name)
    {
        $this->id = $name;
        $this->name = $name;
        $this->label = $name;
        $this->value = $name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getClass()
    {
        return $this->class;
    }

    public function setClass($class)
    {
        $this->class = $class;
        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    public function getLabel()
    {
        return $this->label;
    }

    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
        return $this;
    }

    public function setRequired($required)
    {
        $this->required = $required;
        return $this;
    }

    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    public function getRequired()
    {
        return $this->required;
    }

    public function getType()
    {
       return $this->type;
    }
}