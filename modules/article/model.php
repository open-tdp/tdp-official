<?php

class ArticleModel extends BasicModel
{
    public $name = 'article';

    public function init()
    {
        $id = intval($_GET['id'] ?? 1);
        $this->object = App::storage('articles/' . $id);
        $this->title = $this->object->subject;
        $this->breadcrumbs = [
            ['title' => '文章', 'url' => ''],
        ];
    }
}
