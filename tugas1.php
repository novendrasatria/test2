<?php
class Jam{
protected $model;
function __construct ($model){
	$this->model=$model;
}
function model(){
echo "Jam ini memiliki  model". $this->model."<br>";
}
}
?>	