<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class EgresosController extends Controller{

    public function index(){
        return view('egresos/index');
    }
}