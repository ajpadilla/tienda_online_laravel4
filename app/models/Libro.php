<?php 

	class Libro extends Eloquent
	{
		protected $table = 'libros';
		protected $primaryKey='isbn';
		public $incrementing = false;
		
		function __construct()
		{
			
		}
	}
 ?>