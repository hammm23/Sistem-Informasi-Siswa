<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;  

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all(); // SELECT * FROM students
        // $data_conditional = Student::where("nama", "=", "Ilham Andaru Prabowo")->get(); // SELECT * FROM students where nama='Ilham Andaru Prabowo'
        // return $data_conditional;
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $new_students = new Student;
        return view('students.create', compact('new_students'));    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $new_students = new Student;
        // $new_students->nama = $request->nama;
        // $new_students->nis = $request->nis;
        // $new_students->nisn = $request->nisn;
        // $new_students->tempat_lahir = $request->tempat_lahir;
        // $new_students->tanggal_lahir = $request->tanggal_lahir;
        // $new_students->jenis_kelamin = $request->jenis_kelamin;
        // $new_students->agama = $request->agama;
        // $new_students->status_dlm_keluarga = $request->status_dlm_keluarga;
        // $new_students->anak_ke = $request->anak_ke;
        // $new_students->alamat = $request->alamat;
        // $new_students->no_telp_rumah = $request->no_telp_rumah;
        // $new_students->sekolah_asal = $request->sekolah_asal;
        // $new_students->save();

        return redirect('/students')->with('success', 'Tambah data siswa berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = Student::find($id);
        return view('students.edit', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $new_students = Student::find($id);
        // $new_students->nama = $request->nama;
        // $new_students->nis = $request->nis;
        // $new_students->nisn = $request->nisn;
        // $new_students->tempat_lahir = $request->tempat_lahir;
        // $new_students->tanggal_lahir = $request->tanggal_lahir;
        // $new_students->jenis_kelamin = $request->jenis_kelamin;
        // $new_students->agama = $request->agama;
        // $new_students->status_dlm_keluarga = $request->status_dlm_keluarga;
        // $new_students->anak_ke = $request->anak_ke;
        // $new_students->alamat = $request->alamat;
        // $new_students->no_telp_rumah = $request->no_telp_rumah;
        // $new_students->sekolah_asal = $request->sekolah_asal;
        // $new_students->save();

        return redirect('/students')->with('success', 'Edit data siswa berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $students = Student::find($id);
        // $students->delete();
        // return redirect('/students');

        $students = Student::find($id);
        $students->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus!');
    }
}
