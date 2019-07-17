<?php
Include("tugas1.php"); 
//perwarisan tanpa perubahan 
Class analog extends Jam{ 
Protected $bentuk = "bulat"; //penambahan properti baru  
Function modelJam(){   
	Echo "Jam tersebut memiliki model ".$this->model."<br/>"; 
}
//Pewarisan dengan mengoveride function moodel jam dan penambahan metode 
Class digital extends Jam{  
Protected $bentuk = "bulat"; //penambahan properti baru  
Function modelJam(){   
	Echo "Jam tersebut memiliki model ".$this->model."<br/>"; 
}
}
$nini = new analog(" analog"); 
$nini->modelJam(); 
$lili = new digital(" digital"); 
$lili->modelJam(); 
?> 