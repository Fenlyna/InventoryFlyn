<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    private $code = "190914006";
    private $name = "Irham Nur Kautsar";

    public function index() {
        return view("person.index");
    }

    public function sendData() {
        $code = $this->code;
        $name = $this->name;

        return view("person.sendData", compact('code', 'name'));
    }

    public function show($param){
        $this->name = $param;
        return $this->name;
    }
    //
}
