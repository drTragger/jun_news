<?php


class View
{
    public $template = 'default';
    public $page;

    // data is an array with the news
    public function render ($data)
    {
        include_once 'views' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . $this->template . '.php';
    }
}