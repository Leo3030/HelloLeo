<?php

class HomeController extends Controller
{
    public function indexAction()
    {
        $user = $this->model('User');
    }

}