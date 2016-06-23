<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;

class LinkController extends Controller 
{
	public function index()
    {
        return view('your.index');
    }
	public function form_dur_tra_sum()
    {
    	$eva_dur_tras = DB::select('select * from eva_dur_tra');
        return view('form_dur_tra.summarize', ['eva_dur_tras' => $eva_dur_tras]);
    }
	public function form_dur_tra_index()
    {    	
        return view('form_dur_tra.index');
    }

   }
