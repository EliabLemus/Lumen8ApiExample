<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//menampilkan semua data
public function showAllAuthors() {
    return response()->json(Author::all());
}

//menampilkan data per id
public function showOneAuthor($id){
    return response()->json(Author::find($id));
}

//insert data
public function create(Request $request){
    //validasi
    $this->validate($request, [
        'name' => 'required',
        'gender' => 'required',
    ]);
    $author = Author::create($request->all());
    return response()->json($author, 201);
}

//update data
public function update($id, Request $request){
    $author = Author::findOrFail($id);
    $author->update($request->all());
    return response()->json($author, 200);
}

//hapus data per id
public function delete($id){
    Author::findOrFail($id)->delete();
    return response('Deleted Successfully', 200);
}
    
    //
}
