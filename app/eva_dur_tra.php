<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class eva_dur_tra extends Model
{
    //
    protected $table = 'eva_dur_tra';

    protected $fillable = array('course_code', 'course_name', 'time_period', 'time_unit_code', 'time_unit_name', 'evaluation_date', 'duration_code', 'duration_name', 'question_type_code', 'question_type_name', 'question_code', 'question_name', 'answer_code', 'answer_name', 'answer_text');

    protected $dates = array('evaluation_date');

    public function eva_dur_tra()
    {
        return $this->belongsToMany('App\eva_dur_tra');
    }
    //
}
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

   