<?php

namespace SON\Form;

use SON\Form\Input\InputInterface;

class Form implements FormInterface
{
    private $method;
    private $action;
    private $inputCollection;

    public function __construct()
    {
        $this->inputCollection = array();
    }

    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function addInput(InputInterface $input)
    {
        array_push($this->inputCollection, $input);
    }

    public function render()
    {
        echo $this->openTag();
        foreach($this->inputCollection as $input){
            if($input->getRequired() == "required"){
                $required = "*";
            }
            else{
                $required = "";
            }
            echo "\t<label>".$required.$input->getLabel().": \n";
            echo "\t\t<input type='".$input->getType()."' ";
            echo "id='".$input->getId()."' ";
            echo "name='".$input->getName()."' ";
            echo "value='".$input->getValue()."' ";
            echo "class='".$input->getClass()."' ";
            echo "placeholder='".$input->getPlaceholder()."' ";
            echo "required='".$input->getRequired()."'>\n";
            echo "\t</label>\n";
        }
        echo $this->closeTag();
    }

    public function openTag()
    {
        return "<form method='".$this->method."' action='".$this->action."'>\n";
    }

    public function closeTag()
    {
        return "</form>";
    }

}