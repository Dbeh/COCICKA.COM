<?php
/**
 * Created by PhpStorm.
 * User: skillup
 * Date: 10.06.19
 * Time: 19:45
 */

class InputElement extends FormElement
{
    private $type = 'text';
    /**
     * @param string $name
     */
    public function render(): string
    {
        $html = sprintf('<label for="%s">%s</label>', $this->getName(), $this->getLabel());

        $html.= sprintf('<input type="%s" name="%s" id="%s" value="%s">',
            $this->type, $this->getName(), $this->getName(), $this->value);

        if($this->error){
            $html.= '<span class="error">'. $this->error. '</span>';
        }

        return $html;
    }
}