<?php

 namespace App\Repositories;
 use App\Todo;


 class TestRepository1 implements TestInterface{


 	public function all(){
 		return Todo::get();

 	}


 	public function get($id){
 		return Todo::find($id);


 	}
 	

 	public function sotre( array $data){
 		return Todo::create($data);


 	}


 	public function update($id, array $data){
 		return Todo::find($id)->update($data);

 	}


 	public function delete($id){
 		return Todo::destroy($id);

 	}



 }
















?>