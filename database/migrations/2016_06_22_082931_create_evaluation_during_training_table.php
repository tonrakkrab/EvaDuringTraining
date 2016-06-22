<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluationDuringTrainingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//table: evaluation_during_training
		Schema::create('eva_dur_tra', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('course_code', 10);
			$table->string('course_name', 200);
			$table->string('time_period');
			$table->string('time_unit_code',2);
			$table->string('time_unit_name',200);

			$table->date('evaluation_date');
			$table->string('duration_code', 2);
			$table->string('duration_name', 200);

			$table->string('question_type_code', 2);
			$table->string('question_type_name', 200);
			$table->string('question_code', 10);
			$table->string('question_name', 200);
			$table->string('answer_code', 10);
			$table->string('answer_name', 200);
			$table->string('answer_text', 200);

			//$table->rememberToken();
			//$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//table: evaluation_during_training
		Schema::drop('eva_dur_tra');
	}

}
