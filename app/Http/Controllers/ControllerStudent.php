<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class ControllerStudent extends Controller
{
    public function index(){
        //melihat data
        $student = Student::all();//menggunakan eloquent
        $data = [
            'message' => 'Berhasil akses data',
            'data' => $student
        ];
        return response()->json($data,200);
    
    }

    public function store(Request $request){
        $input = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan,
        ];
        $student = Student::create($input);
        $data = [
            'message' => 'Berhasil akses data',
            'data' => $student  
        ];
        return response()->json($data,200);
    }
}
