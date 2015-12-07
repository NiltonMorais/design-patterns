<?php

namespace SON\Form;

use SON\Form\Input\InputInterface;

interface FormInterface
{
    public function setMethod($method);
    public function setAction($action);
    public function getMethod();
    public function getAction();
    public function addInput(InputInterface $input);
    public function render();
    public function openTag();
    public function closeTag();
}