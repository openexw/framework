<?php

class HomeController extends BaseController{
    public function index() {
       /* $article = Article::first();
        require dirname(__FILE__).'/../views/home.php';*/
        $this->view = View::make('home')->with('article', Article::first())
                                        ->withTitle("sd")
                                        ->withFuck("OK");
    }
}