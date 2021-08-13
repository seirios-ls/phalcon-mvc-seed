<?php

use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
    /**
     * Welcome and user list
     */
    public function indexAction()
    {
        $this->view->setRenderLevel(3);
        $this->assets->addCss('css/style.css');
//        $this->view;
    }
}
