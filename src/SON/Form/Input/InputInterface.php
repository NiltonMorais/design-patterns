<?php

namespace SON\Form\Input;


interface InputInterface
{
    public function setId($id);
    public function setName($name);
    public function setClass($class);
    public function setValue($value);
    public function setLabel($label);
    public function setPlaceholder($placeholder);
    public function setRequired($required);
    public function getId();
    public function getName();
    public function getClass();
    public function getValue();
    public function getLabel();
    public function getPlaceholder();
    public function getRequired();
    public function getType();
}