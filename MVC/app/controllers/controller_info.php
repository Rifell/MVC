<?php

class Controller_Info extends Controller {
    function __construct()
    {
        $this->model = new Model_Info();
        $this->view = new View();
    }

    public function action_index()
    {
        $this->view->generate('info_view.php', 'template_view.php');
    }
}