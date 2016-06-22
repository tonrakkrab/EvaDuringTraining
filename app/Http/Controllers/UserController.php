<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
        return view('user.index');
    }
    public function summarize()
    {
        //$users = DB::select('select * from users where active = ?', [1]);
        $users = DB::select('select * from users');

        return view('user.summarize', ['users' => $users]);
    }

    public function insert()
    {
        //DB::insert('insert into users (id, name, email, password) values (?, ?, ?, ?)', [1, 'Dayle', 'test.w@test.com', '1234']);

        /*
        DB::transaction(function () {
            DB::table('users')->update(['votes' => 1]);

            DB::table('posts')->delete();
        });
        */

        DB::insert('insert into users (name, email, password) values ("Dayle", "test5.w@test.com", "1234")');

        return view('user.insert', ['is_completed' => '1']);
    }
}