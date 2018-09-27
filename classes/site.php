<?php
/**
 * Created by PhpStorm.
 * User: chuka
 * Date: 25/09/2018
 * Time: 10:51 AM
 */

class site{
    private $header;
    private $footer;

    public function addHeader($header){
        $this->header = $header;
    }

    public function addFooter($footer){
        $this->footer = $footer;
    }

    public function  display($content, $title){
        global $page;

        include $this->header;
        $page->display($content);
        include $this->footer;
    }
}