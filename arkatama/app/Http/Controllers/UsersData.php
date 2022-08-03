<?php

namespace App\Http\Controllers;

use App\Models\Users_Data;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;



class UsersDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('table_users_data');
        return view('index', ['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insertNote(Request $post)
    {
        $validatedData = $post->validate([
            'status' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        Users_Data::create($validatedData);

        return redirect('/');
    }
}
