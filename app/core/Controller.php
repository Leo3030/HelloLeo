<?php

class Controller
{
    protected function model($model)
    {
        if (file_exists('../app/models/' . $model . '.php')) {
            require_once '../app/models/' . $model . '.php';

            return new $model();
        } else {
            throw new Exception('Model not found');
        }
    }

    protected function view($view, $data)
    {

    }
}