<?php

class Controller
{
    protected $redirect;
    protected $session;
    protected $view;
    protected $error;

    public function __construct()
    {
        $this->redirect     = new Redirect();
        $this->session      = new Session();
        $this->view         = new View();
        $this->error        = new ErrorStatus();
    }

}