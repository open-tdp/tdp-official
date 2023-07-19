<?php

class BlogsModel extends BasicModel
{
    public $name = 'blogs';

    public $blogs = [];

    public function init()
    {
        $id = intval($_GET['id'] ?? 1);
        $this->blogs = App::storage('blogs/index');
        // 模板变量
        $this->title = '博文列表';
        $this->breadcrumbs = [
            ['title' => '博客', 'url' => 'index.php?mod=blogs'],
        ];
    }
}
