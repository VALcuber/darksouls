<?php


    class View
    {
        public function render($tpl, $pageData) {

            include ROOT. '/Templates/head.tpl';

            include ROOT. $tpl;

            include ROOT. '/Templates/footer.tpl';

        }
    }