<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    private $animals = ["kucing","tikus","gajah"];


    public function index() {
        foreach ($this->animals as $item) {
            echo $item . "<br>"; 
        }
    }

    public function store(Request $request) {
        array_push($this->animals, $request->nama );
        $this->index();
    }

    public function update(Request $request, $id) {
        $this->animals[$id] = $request->nama;
        $this->index();
    }

    public function destroy($id) {
        unset($this->animals[$id], $request->nama);
        $this->index();
    }
}
