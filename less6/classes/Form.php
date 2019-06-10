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

    public function  add(FormElement $element)
    {
        $this->elements[$element->getName()] = $element;
    }


    public function render()
    {
        $html = '<form>';

        foreach ($this->elements as $el){
            $html .= $el->render() . '<br>';
        }

        $html.= '</form>';

        return $html;
    }

}