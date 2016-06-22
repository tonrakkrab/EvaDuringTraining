<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;

class FormController extends Controller 
{
	public function index()
    {
        return view('form_dur_tra.index');
    }
	public function summarize()
    {
        //$users = DB::select('select * from users where active = ?', [1]);
        $eva_dur_tras = DB::select('select * from eva_dur_tra');

        return view('form_dur_tra.summarize', ['eva_dur_tras' => $eva_dur_tras]);
    }
    public function insert()
    {
        /*
        DB::insert('insert into users (id, name, email, password) values (?, ?, ?, ?)', [1, 'Dayle', 'test.w@test.com', '1234']);        
        DB::transaction(function () {
            DB::table('users')->update(['votes' => 1]);
            DB::table('posts')->delete();
        });
        */
        /*
			$table->string('course_code', 10);
			$table->string('course_name', 200);
			$table->strimg('time_period');
            $table->string('time_unit_code',2);
            $table->string('time_unit_name',200);

			$table->date('evaluation_date')
			$table->string('duration_code', 2);
			$table->string('duration_name', 200);

			$table->string('question_type_code', 2);
			$table->string('question_type_name', 200);
			$table->string('question_code', 10);
			$table->string('question_name', 200);

			$table->string('answer_code', 10);
			$table->string('answer_name', 200);
			$table->string('answer_text', 200);

		*/
        DB::insert('insert into eva_dur_tra (
            course_code, course_name, time_period, time_unit_code, time_unit_name
            , evaluation_date, duration_code, duration_name
            , question_type_code, question_type_name, question_code, question_name
            , answer_code, answer_name, answer_text
            ) 
            values (
            "JOOM001", "การปรับเวอร์ชัน Joomla เป็น เวอร์ชั่นปัจจุบัน", 18, "TU001","ชั่วโมง" 
            , date("now"), "DUR001", "(บ่าย)"
            , "SEL", "Choice", "Q001" ,"ท่านเข้าใจเนื้อหาบทเรียนประมาณ"
            , "A001", "ไม่ค่อยเข้าใจ", ""
            )');

        return view('form_dur_tra.insert', ['is_completed' => '1']);
    }
}
