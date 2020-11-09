<?php


class Controller
{
    private $view;
    private $news;

    public function __construct()
    {
        $this->view = new View();
        $this->view->render($this->news);
    }
}