<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionTable extends Migration {

	public function up()
	{
		Schema::create('sessions', function($table)
		{
			$table->string('id')->unique();
			$table->text('payload');
			$table->integer('last_activity');
		});
	}

	public function down()
	{
		Schema::drop('sessions');
	}

}
