<?php

class Index extends Controller
{

    public function main()
    {
        $model = new memberModel();

        $data = $model->read();

        $this->view->render('index/index', 'layout', $data);
    }

}