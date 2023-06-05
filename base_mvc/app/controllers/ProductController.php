<?php
namespace App\Controllers;
class ProductController {
    public function __construct() {

    }
    public function index() {
        echo 123;
        die;
    }
    public function detail($id,$hihi) {
        echo $id."-".$hihi;
        die;
    }
}