<?php

use Illuminate\Database\Migrations\Migration;

class CreateLibrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('libros', function($table){
		
			 $table->string('isbn',10);
			 $table->string('titulo',50);
			 $table->text('descripcion');
			 $table->float('precio');
			 $table->string('autor',50);
			 $table->integer('id_categoria');
			 $table->string('imagen',50);
			 
			 $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		 Schema::drop('libros');
	}

}