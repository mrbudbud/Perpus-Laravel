<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataController extends Controller
{
    public function authors()
    {
        // return view ('admin.author.index');
        return datatables()->of(Author::orderBy('name', 'ASC'))
                        ->addColumn('action', function(){
                            return '<a href="'. route('admin.author.edit') .'" class="btn btn-warning">Edit<a/>'; 
                        })
                        ->addIndexColumn()
                        ->toJson();
    }
}