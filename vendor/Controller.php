<?php


class Controller
{
    private $view;
    private $news;

    public function __construct($news)
    {
        $this->view = new View();
        switch ($_GET['page']) {
            default:
                $this->all();
                break;
            case 'item':
                $this->item();
                break;
        }
        $this->news = $news;
        $this->view->render($this->news); // Renders the page
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
        return [
            'title' => filter_input(INPUT_POST, 'title'),
            'content' => filter_input(INPUT_POST, 'content'),
        ];
    }
}