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
    public function show($id){
        //mengambil data berdasarkan id
        $student = Student::find($id);
        if($student){
        $data = [
        'message' => 'Berhasil akses data',
        'data' => $student
        ];
        return response()->json($data,200);
        }else{
        return response()->json(['message' => 'Data tidak ditemukan'],404);
    }
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
            'message' => 'Berhasil tambah data',
            'data' => $student  
        ];
        return response()->json($data,201);
    }
    public function update(Request $request,$id){
        $student = Student::find($id);
        if($student){
            $input = [
                'nama' => $request->nama,
                'nim' => $request->nim,
                'email' => $request->email,
                'jurusan' => $request->jurusan,
                ];
                $student->update($input);
                $data = [
                    'message' => 'Berhasil edit data',
                    'data' => $student
                    ];
                    return response()->json($data,);
                    }else{
                        $data = [
                            'message' => 'Data tidak ditemukan',
                            'data' => null
                            ];
                            return response()->json($data,404);
                            }
                            }
        public function destroy($id){
             $student = Student::find($id);
             if($student){
                 $student->delete();
                 $data = [
                     'message' => 'Berhasil menghapus data',
                     'data' => null
                     ];
                     return response()->json($data,404);
                     }else{
                         $data = [
                             'message' => 'Data tidak ditemukan',
                             'data' => null
                             ];
                             return response()->json($data,404);
                             }
                         }
                     }
                     

                                                


                                                
                                            
                                            