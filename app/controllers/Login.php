<?php

class Login extends Controller
{

    public function main()
    {
        $this->view->render('login/form_login', 'layout');

    }

    public function signin()
    {
        $model = new userModel();

        $user = $model->getUser($_POST['login'], $_POST['password']);

        if (count($user) > 0) {

            $this->session->setSession('login', $user[0]['login']);

            $this->redirect->redirectTo('/admin/dashboard');

        } else {

            $this->redirect->redirectTo('/login');

        }
    }

    public function signout()
    {
        $this->session->destroySession();

        $this->redirect->redirectTo('/');
    }
}