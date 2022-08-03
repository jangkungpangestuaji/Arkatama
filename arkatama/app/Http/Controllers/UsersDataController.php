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
        $data = DB::table('table_users_data')->get();
        return view('index', ['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insert(Request $post)
    {
        $validatedData = $post->validate([
            'name' => 'required',
            'age' => 'required',
            'city' => 'required',
        ]);

        Users_Data::create($validatedData);

        return redirect('/UsersData');
    }
}
