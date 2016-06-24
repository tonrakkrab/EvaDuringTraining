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
	public function selectAll()
    {        
        $eva_dur_tras = DB::select('select * from eva_dur_tra');
        return view('form_dur_tra.select_all', ['eva_dur_tras' => $eva_dur_tras]);
    }
    public function conclude()
    {        
        //$eva_dur_tras = DB::select('select * from eva_dur_tra where couse_code = ? and evaluation_date = ? and duration_code = ?', [$cousecode, $evaluationdate, $durationcode]);
        $eva_dur_tras = DB::select('select * from eva_dur_tra ');

        return view('form_dur_tra.conclude', ['eva_dur_tras' => $eva_dur_tras]);
    }
    public function insertTest()
    {        
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
    public function insert()
    {
        $course_code = 
        $course_name = 
        $time_period = 
        $time_unit_code = 
        $time_unit_name = 

        $evaluation_date = 
        $duration_code = 
        $duration_name = 

        $question_type_code = 
        $question_type_name = 
        $question_code = 
        $question_name = 
        
        $answer_code = 
        $answer_name = 
        $answer_text = 

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
    public function update($id, $cousecode)
    {
        $affected = DB::update('update eva_dur_tra set course_code = ? where id = ?', [$cousecode, $id]);
        $isComplete = '0';
        if ($affected > 0) {
            $isComplete = '1';
        }

        return view('form_dur_tra.update', ['is_completed' => $isComplete, 'num_rows' => $affected, 'id' => $id]);
    }
    public function deleteAll()
    {
        $deleted = DB::delete('delete from eva_dur_tra');
        $isComplete = '0';
        if ($deleted > 0) {
            $isComplete = '1';
        }

        return view('form_dur_tra.delete_all', ['is_completed' => $isComplete, 'num_rows' => $deleted]);
    }   
    public function delete($id)
    {
        $deleted = DB::delete('delete from eva_dur_tra where id = ?', [$id]);
        $isComplete = '0';
        if ($deleted > 0) {
            $isComplete = '1';
        }
        return view('form_dur_tra.delete', ['is_completed' => $isComplete, 'num_rows' => $deleted, 'id' => $id]);
    }

    /*
    public function doSomething($squirrel)
    {
        $data['squirrel'] = $squirrel;
        return View::make('simple', $data);
    }
    */

    //$results = DB::select('select * from users where id = :id', ['id' => 1]);

    // # Running An Insert Statement
    //DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);
    // # Running An Update Statement
    //$affected = DB::update('update users set votes = 100 where name = ?', ['John']);
    // # Running A Delete Statement
    //$deleted = DB::delete('delete from users');

    // # Running A General Statement
    //DB::statement('drop table users');

    // # Database Transactions
    /*
    DB::transaction(function () {
            DB::table('users')->update(['votes' => 1]);
            DB::table('posts')->delete();
    });
    */
}
