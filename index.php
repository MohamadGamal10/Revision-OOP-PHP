<?php


// class user {

//     public $name = "ahmed";
//     public function update(){
//         echo 'update';
//     }
// }

// $x = new user();
// echo $x->name;
// $x->update();

////////////////////////////////////

// class calc {

//     public function sum($x, $y){
//         return $x + $y;
//     }

//     public function mult($x, $y){
//         return $x * $y;
//     }
// }

// $x = new calc();


// echo $x->sum(5, 5);
// echo "<br>";
// echo $x->mult(5,5);

//////////////////////////////////////

// class car {
//     public $color = "red";
//     public $model = "bmw";
//     public $year = 2019;

//     public function move(){
//         echo "car $this->model move";
//     }
// }

// $car1 = new car();

// echo $car1->color;
// echo "<br>";
// echo $car1->model;
// echo "<br>";
// echo $car1->year;
// echo "<br>";
// $car1->move();
// echo "<br>";

// print_r($car1); 
// echo "<br>";

// $car2 = new car();

// echo $car2->color;
// echo "<br>";
// echo $car2->model = "audi";
// echo "<br>";
// echo $car2->year;
// echo "<br>";
// $car2->move();
// echo "<br>";

// print_r($car1); 

///////////////////////////////////////

// class calc
// {
//     public $x;
//     public $y;
//     public $sumResult;
//     public $multResult;


//     public function __construct($n1, $n2)
//     {
//         $this->x = $n1;
//         $this->y = $n2;
//     }

//     public function sum()
//     {
//         $result = $this->x + $this->y;
//         $this->sumResult = $result;
//         return $result;
//     }

//     public function mult()
//     {
//         $result = $this->x * $this->y;
//         $this->multResult = $result;
//         return $result;
//     }

//     public function print()
//     {
//         echo $this->sumResult;
//         echo "<br>";
//         echo $this->multResult;
//         echo "<br>";
//     }
// }

// $calc1 = new calc(5, 5);


// $calc1->sum();
// $calc1->mult();
// $calc1->print();


// $calc2 = new calc(10, 30);
// $calc2->sum();
// $calc2->mult();
// $calc2->print();

//////////////////////////////////////

// inheritance

// class car {
//     public function engin(){
//         echo "engin";
//     }
// }

// class bmw extends car {
//     public function move(){
//         echo "move bmw";
//     }
// }

// $bmw1 = new bmw();
// $bmw1->engin();
// echo "<br>";
// $bmw1->move();

// echo "<br>";

// class audi extends car {
//     public function move(){
//         echo "move audi";
//     }
// }

// $audi1 = new audi();
// $audi1->engin();
// echo "<br>";
// $audi1->move();

////////////////////////////////////////

// access modifiers (public, private, protected)

// class a{
//     public $color = "red";
//     private $model = "bmw";
//     protected $year = 2019;

//     public function getColor(){
//         echo "color is " . $this->color;
//     }

//     public function getModel(){
//         echo "model is " . $this->model;
//     }

//     public function getYear(){
//         echo "year is " . $this->year;
//     }
// }

// $color1 = new a();
// $color1->getColor();

// echo "<br>";

// class b extends a{
//     public function test(){
//         echo "colorb is " . $this->color;
//     }

//     public function year(){
//         echo "yearb is " . $this->year;
//     }
// }

// $color2 = new b();
// $color2->getColor();
// echo "<br>";
// $color2->test();
// echo "<br>";
// $color2->year();

///////////////////////////////////////

// interface & polymorphism ; interface => class implements more interface

// interface db{
//     public function insert();
//     public function update();
//     public function delete();
//     public function select();
// }


// class mysql implements db{
//   public function insert(){
//       echo "insert";
//   }

//   public function update(){
//       echo "update";
//   }

//   public function delete(){
//       echo "delete";
//   }

//   public function select(){
//       echo "select";
//   }
// }

// class sqlserver implements db{
//     public function insert(){
//         echo "insert";
//     }

//     public function update(){
//         echo "update";
//     }

//     public function delete(){
//         echo "delete";
//     }

//     public function select(){
//         echo "select";
//     }
// }

// $mysql = new mysql();
// $mysql->insert();
// echo "<br>";
// $mysql->update();
// echo "<br>";
// $mysql->delete();
// echo "<br>";
// $mysql->select();
// echo "<br>";

// $sqlserver = new sqlserver();
// $sqlserver->insert();
// echo "<br>";
// $sqlserver->update();
// echo "<br>";
// $sqlserver->delete();
// echo "<br>";
// $sqlserver->select();
// echo "<br>";

//////////////////////////////////

// mysqli

// class user
// {
//     private $connection;
//     public function __construct()
//     {
//         $this->connection = new mysqli("localhost", "root", "", "test");
//     }

//     public function insert($data)
//     {
//         // echo "<pre>";
//         // print_r($this->connection);

//         $key = array_keys($data);
//         $values = array_values($data);

//         $keys = implode("`,`", $key);
//         $values = implode("','", $values);
//         // echo "INSERT INTO `user`(`$keys`) VALUES ('$values')"; die;
//         mysqli_query($this->connection, "INSERT INTO `user`(`$keys`) VALUES ('$values')");
//     }

//     public function update($data)
//     {

//         $keys = array_keys($data);
//         $values = array_values($data);


//         $str = "";
//         foreach ($values as $idx => $value) {
//             $str .= "`$keys[$idx]`='$value' , ";
//         }

//         $str = rtrim($str, " , ");
    
//         $query = "UPDATE `user` SET $str WHERE id = 22";
//         mysqli_query($this->connection, $query);
//     }

//     public function delete($id){
//         $query = "DELETE FROM `user` WHERE id = $id";
//         mysqli_query($this->connection, $query);
//     }

//     public function select(){
//         $query = "SELECT * FROM `user`";
//         $result = mysqli_query($this->connection, $query);
//         return $result;
//     }
// }

// $user = new user();
// $user->insert([
//     "name" => "ahmed",
//     "email" => "ahmed@gmail.com",
//     "password" => "123456",
//     "img" => "img.jpg",
//     "role" => "2"
// ]);

// $user->update([
//     "name" => "ali",
//     "email" => "ali@gmail.com",
//     "password" => "123456",
//     "img" => "img.jpg",
//     "role" => "2"
// ]);

// $user->delete(21);

// $result = $user->select();
// while($row = mysqli_fetch_assoc($result)){
//     echo $row["name"];
//     echo "<br>";
// }

//////////////////////////////////////////////////////////////

// Abstraction & abstract => class extends one abstract

// abstract class a{
//     public $name;
//     public function test(){
//         echo "test";
//     }

//     abstract public function test2();
// }

// class b extends a{

//     public function test2(){
//         echo "test2";
//     }
// }    

// $b = new b();
// $b->test(); // test
// $b->test2(); // test2

////////////////////////////////////////

// Encapsulation

// class User {
//     private $name;

//     public function setName($name) {
//         $this->name = $name;
//     }

//     public function getName() {
//         return $this->name;
//     }
// }

// $user = new User();
// $user->setName("Ahmed");
// echo $user->getName(); // Ahmed

///////////////////////////////////////

// method chaining

// class calac{
//     public $x, $y;
//     private $result;

//     public function sum(){
//         $this->result = $this->x + $this->y;
//         return $this;
//     }

//     public function mult(){
//         $this->result = $this->x * $this->y;
//         return $this;
//     }

//     public function min(){
//         $this->result = $this->x - $this->y;
//         return $this;
//     }

//     public function div(){
//         $this->result = $this->x / $this->y;
//         return $this;
//     }

//     public function print(){
//         echo $this->result;
//     }

// }

// $calc = new calac();
// $calc->x = 10;
// $calc->y = 5;


// $calc->sum()->print(); // 15
// echo "<br>";
// $calc->mult()->print(); // 50
// echo "<br>";
// $calc->min()->print(); // 5
// echo "<br>";
// $calc->div()->print(); 
// echo "<br>";

// $calc->sum()->mult()->min()->div()->print(); // 2

////////////////////////////////////////////////////

// task for method chaining in db.php file

require "db.php";

$db = new db("localhost", "root", "", "test", "user");
// $db->insert([
//     "name" => "ahmed",
//     "email" => "ahmed@gmail",
//     "password" => "123456",
//     "img" => "img.jpg",
//     "role" => "2"
// ])->excute();

// echo "<pre>";
// print_r($db->select()->where("id", "=", "22")->fetchOne());
// print_r($db->select()->fetchAll());

// $db->update([
//     "name" => "hamoo",
//     "email" => "hamoo@gmail",
//     "password" => "123456",
//     "img" => "img.jpg",
//     "role" => "2"
// ], 24)->where("id", "=", "24")->excute();

// $db->delete()->where("id", "=", "24")->excute();

