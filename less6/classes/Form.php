<?php
/**
 * Created by PhpStorm.
 * User: skillup
 * Date: 10.06.19
 * Time: 19:14
 */

class Form
{
    /**
     * @var FormElement[]
     */
    private $elements;

    /**
     * @var bool
     */
    private $isSubmitted = false;

    /**
     * @return FormElement[]
     */
    public function __construct(string $method = 'post')
    {
        $availableMethod = ['post', 'get'];
        $method = strtolower($method);

        if(!in_array($method, $availableMethod)){
            throw new InvalidArgumentException('Method '.$method. 'is not avaiable');
        }


        $this->method = strtolower($method);
    }

    public function  add(FormElement $element)
    {
        $this->elements[$element->getName()] = $element;
    }


    public function render()
    {
        $html = sprintf('<form method="%s">', $this->method);

        foreach ($this->elements as $element){
            $html .= $element->render() . '<br>';
        }

        $html.= '</form>';

        return $html;
    }

    public function handleRequest()
    {
        $data = $this->method == 'post'?$_POST:$_GET;

        foreach ($this->elements as $element){
            if(isset($data[$element->getName()])){
                $this->isSubmitted = true;
                $element->setValue($data[$element->getName()]);
            }
        }

        foreach ($this->elements as $element){
            if($element->getError()){
                $this->isSubmitted = false;
                break;
            }
        }
    }

    public function getValue($name)
    {
        return $this->elements[$name]->getValue();
    }

    /**
     * @return bool
     */
    public function isSubmitted(): bool
    {
        return $this->isSubmitted;
    }




}