<?php
/**
 * Created by PhpStorm.
 * User: skillup
 * Date: 12.06.19
 * Time: 19:14
 */

class ButtonElement extends FormElement
{
    protected $type = 'submit';

    public function render(): string
    {
        return sprintf('<button type="%s">%s</button>', $this->type, $this->getLabel());
    }
}