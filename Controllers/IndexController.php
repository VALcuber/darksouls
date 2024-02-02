<?php


    class IndexController extends Controller{

        private $pageTpl = '/Templates/Index.tpl';

        public function __construct() {
            $this->model = new IndexModel();
            $this->view = new View();
        }

        public function index(){
            $this->view->render($this->pageTpl, $this->pageData);
        }
    }