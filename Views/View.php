<?php


    class View
    {
        public function render($tpl, $pageData) {

            include ROOT. '/templates/head.tpl';

            include ROOT. $tpl;

            include ROOT. '/templates/footer.tpl';

        }
    }