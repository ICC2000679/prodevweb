<?php
    class Accueil extends Controller {
        function __construct() {
            parent::__construct();
        }
        
        function index(){
            $this->view->render('accueil/index');
        }
    }

?>