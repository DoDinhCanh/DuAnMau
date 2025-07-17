<?php
    class CategoryController {
        public $view;
        function set_view($v){
            $this->view=$v;
        }
        function view() {
            include_once "views/".$this->view.".php";
        }
    }
?>