<?php 

 namespace App\Repositories;


 interface TestInterface{

 	public function all();


 	public function get($id);
 	

 	public function sotre( array $data);


 	public function update($id, array $data);


 	public function delete($id);
 	






 }













?>