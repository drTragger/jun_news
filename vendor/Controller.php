<?php


class Controller
{
    private $view;
    public $news;

    public function __construct()
    {
        $this->view = new View();
        switch ($_GET['page']) {
            case 'all':
                $this->all();
                break;
            case 'item':
                $this->item();
                break;
            default:
                $this->add();
                break;
        }
        $this->view->render($this->news);
    }

    public function all()
    {
        $this->view->page = 'all';
    }

    public function item()
    {
        $this->view->page = 'item';
    }

    public function add()
    {
        unset($_GET['page']);
    }
}