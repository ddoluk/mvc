<?php

class View
{
    public function render($content, $layout, $data = array())
    {
        require_once 'app/views/' . $layout . '.php';
    }
}