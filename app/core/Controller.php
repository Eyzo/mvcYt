<?php

class Controller {

    protected function model($model) {
        require_once '../app/models/'. $model .'.php';
        return new $model();
    }

    public function view($view,$data = []) {

        extract($data);

        ob_start();

        require_once '../app/views/'.$view.'.php';

        $content = ob_get_clean();

        require_once '../app/views/template.php';
    }


}