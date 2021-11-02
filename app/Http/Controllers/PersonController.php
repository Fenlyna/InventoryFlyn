<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    private $name = "Irham Nur Kautsar";
    private $code = "190914006";

    public function index() {
        return $this->name ." ". $this->code;
    }

    public function show($param){
        $this->name = $param;
        return $this->name;
    }
    //
}
