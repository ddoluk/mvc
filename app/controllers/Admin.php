<?php

class Admin extends Controller
{
    public function __construct()
    {
        parent::__construct();

        if(!isset($_SESSION['login'])){

            $this->view->render('error/403','layout');

        }

    }

    public function dashboard()
    {

        $model = new memberModel();

        $data = $model->read();

        $this->view->render('admin/dashboard', 'layout', $data);

    }

    public function add()
    {


        $this->view->render('admin/editor/add', 'layout');

    }

    public function save()
    {

        $model = new memberModel();

        $model->create($_POST);

        $this->redirect->redirectTo('/admin/dashboard');

    }

    public function edit()
    {
        $model = new memberModel();

        $data = $model->edit($_POST['edit_id']);

        $this->view->render('admin/editor/edit', 'layout', $data);

    }

    public function update()
    {
        $model = new memberModel();

        $model->update($_POST);

        $this->redirect->redirectTo('/admin/dashboard');

    }

    public function delete()
    {

        $model = new memberModel();

        $model->delete($_POST['member_id']);

        $this->redirect->redirectTo('/admin/dashboard');

    }
}