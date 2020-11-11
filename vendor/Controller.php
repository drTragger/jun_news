<?php


class Controller
{
    /**
     * @var View
     */
    private $view;
    /**
     * @var News
     */
    private $news;

    public function __construct()
    {
        $this->view = new View();
        $this->news = new News();
    }

    public function all()
    {
        $this->view->page = 'all';
        $this->view->render($this->news->getAllNews());
    }

    public function item()
    {
        $this->view->page = 'item';
        $id = filter_input(INPUT_GET, 'newsId');
        $this->view->render($this->news->getNewsItem($id));
    }

    public function add()
    {
        $newNewsItem = [
            'title' => filter_input(INPUT_POST, 'title'),
            'content' => filter_input(INPUT_POST, 'content'),
        ];
        $this->news->addNewsItem($newNewsItem);
        Router::redirect();
    }
}