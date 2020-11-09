<?php


class View
{
    public $template = 'views' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'default.php';
    public $page;

    public function render ($data)
    {
        include_once $this->template;
    }
}