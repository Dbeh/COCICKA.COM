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
     * @var string
     */
    protected $value;

    /**
     * @var bool
     */
    protected $required = false;

    /**
     * @var string
     */
    protected $error = '';

    /**
     * FormElement constructor.
     * @param sting $name
     * @param string $label
     */
    public function __construct(string $name, string $label, bool $required = false)
    {
        $this->name=$name;
        $this->label=$label;
        $this->required=$required;
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
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue($value):void
    {
        $this->value = $value;

        if(empty($value) && $this->required){
            $this->error = 'Поле не должно быть пустым';
        }
    }

    /**
     * @return string
     */
    public function getError(): string
    {
        return $this->error;
    }


    /**
     * @param string $name
     */
    abstract public function render():string;




}