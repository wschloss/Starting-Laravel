<?php

class PetsTableSeeder extends Seeder {
	public function run() {
		DB::table('pets')->delete();

		DB::table('pets')->insert(array(
			//id, name, age, pettype_id
			array('id'=>1,'name'=>'Pumpkin', 'age'=>7, 'pettype_id'=>'2'),
			array('id'=>2,'name'=>'Fido', 'age'=>3, 'pettype_id'=>'1'),
			array('id'=>3,'name'=>'Oliver', 'age'=>12, 'pettype_id'=>'2'),
			array('id'=>4,'name'=>'Snowy', 'age'=>8, 'pettype_id'=>'2'),
			array('id'=>5,'name'=>'Rover', 'age'=>8, 'pettype_id'=>'3'),
			array('id'=>6,'name'=>'Laddie', 'age'=>6, 'pettype_id'=>'1'),
			array('id'=>7,'name'=>'Daffney', 'age'=>2, 'pettype_id'=>'3'),
			array('id'=>8,'name'=>'Sally', 'age'=>10, 'pettype_id'=>'1')
		));

		DB::table('pettypes')->insert(array(
			//id, name
			array('id'=>1,'name'=>'dog'),
			array('id'=>2,'name'=>'cat'),
			array('id'=>3,'name'=>'bunny')
		));
	}
}

?>