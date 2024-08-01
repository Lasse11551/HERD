<?php

namespace App;

class Checkbox extends Boolean
{
    public function render(): string
    {
        return <<<HTML
        <input type="check-box" name="{$this->name}" />
        HTML;
    }
}