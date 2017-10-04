<?php

include('Person.php');
include('Interface.php');
include('Abstract.php');

class Panji extends Person implements b {

    //ABSTRACTION Interface Function
    public function penampilan() {
        return "Menarik";
    }
    //ABSTRACTIONInterface Function
    public function kepribadian() {
        return "Baik";
    }

    //OVERLOADING POLYMORPHISM Function
    //using php magic method
    public function __call($method, $param) {
        if ($method === 'Hitung') {
            echo "10 tahun lagi berumur : ".$this->_hitung($param);
        } else {
          "";
        }
   }

   private function _hitung($param){
     $jumlah =0;
     foreach ($param as $value) {
         $jumlah += $value;
     }
     return $jumlah;
   }

   function hobby() {
        return "Main Basket";
   }
}
    //OVERRIDING POLYMORPHISM
class Me extends Panji {
    function hobby() {
        return "Main Game";
   }
}

//ABSTRACTION Abstract CLass
class HobbyLain extends Lainnya {
    public function hobby_lainnya($hobby  ,$spasi = " "){
        if ($hobby == "Makan") {
            $akhiran = "Nasi";
        } elseif ($hobby == "Baca") {
            $akhiran = "Buku";
        } else {
            $akhiran = "Tidur";
        }
        return "{$hobby}{$spasi}{$akhiran}";
    }
    
}

$panji = new Panji();
$panjiobj = new Me();
$hobbylain = new HobbyLain();

//SETTER
$panji->setName("Panji Pamungkas");
$panji->setAge(22);
$panji->setHeight(173);
$panji->setGender("Male");

//GETTER
echo "Name : ".$panji->getName()."\n";
echo "Age : ".$panji->getAge()." years old \n";
echo "Height : ".$panji->getHeight()." Cm \n";
echo "Gender : ".$panji->getGender()."\n";

//INTERFACE
echo "Penampilan : ".$panji->penampilan()."\n";
echo "Kepribadian : ".$panji->kepribadian()."\n";

//POLYMORPHISM
echo "Hobby 1 : ".$panji->hobby()."\n"; //Bentuk 1
echo "Hobby 2 : ".$panjiobj->hobby()."\n";//Bentuk 2

//ABSTRACT
echo "Hobby Lain-lain : ".$hobbylain->hobby_lainnya("Makan")."\n";
$panji->Hitung($panji->getAge(),10);


?>