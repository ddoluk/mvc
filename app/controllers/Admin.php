<?php

class Admin extends Controller
{
    private $model;

    public function __construct()
    {
        parent::__construct();

        if (!isset($_SESSION['login'])) {

            $this->view->render('error/403', 'layout');

            exit();

        } else {

            $this->model = new memberModel();

        }

    }

    public function dashboard()
    {

        $data = $this->model->read();

        $this->view->render('admin/dashboard', 'layout', $data);

    }

    public function add()
    {


        $this->view->render('admin/editor/add', 'layout');

    }

    public function save()
    {

        $this->model->create($_POST);

        $this->redirect->redirectTo('/admin/dashboard');

    }

    public function edit()
    {
        $data = $this->model->edit($_POST['edit_id']);

        $this->view->render('admin/editor/edit', 'layout', $data);

    }

    public function update()
    {

        $this->model->update($_POST);

        $this->redirect->redirectTo('/admin/dashboard');

    }

    public function delete()
    {

        $this->model->delete($_POST['member_id']);

        $this->redirect->redirectTo('/admin/dashboard');

    }
}