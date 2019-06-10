<?php


abstract class FormElement
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $label;

    /**
     * FormElement constructor.
     * @param sting $name
     * @param string $label
     */
    public function __construct(string $name, string $label)
    {
        $this->name=$name;
        $this->label=$label;

    }

    /**
     * @return string
     */
    public function getName():string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getLabel():string
    {
        return $this->label;
    }



    /**
     * @param string $name
     */
    abstract public function render():string;




}