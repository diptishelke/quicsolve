<?php
class Department{
protected $departmentname;


}
class Employee extends Department{
 protected $name;
 protected $email;
 protected $phone;
 protected $address;
 protected $city;

class Employesalary extends Employee{

public $salary;
public function setdepartmentname($departmentname){
    $this->departmentname=$departmentname;
    
    }
    public function getdepartmentname(){
    return $this->departmentname;
    }
    public function setname($name){
        $this->name=$name;
        
        }
        public function getname(){
        return $this->name;
        }
        public function setemail($email){
        $this->email=$email;
        
        }
        public function getemail(){
        return $this->email;
        }
        public function setphone($phone){
        $this->phone=$phone;
        
        }
        public function getphone(){
        return $this->phone;
        }
        public function setaddress($address){
        $this->address=$address;
        
        }
        public function getaddress(){
        return $this->address;
        }
        public function setcity($city){
        $this->city=$city;
        
        }
        public function getcity(){
        return $this->city;
        }
        
        }


}

$obj1=new Department();


$obj2=new Employee();
$obj2->setname("dipti");
echo $obj2->getname();
$obj2->setemail("dipti@gmail.com");
echo $obj2->getemail();
$obj2->setphone("7249649901");
echo $obj2->getphone();
$obj2->setaddress("bhosari");
echo $obj2->getaddress();
$obj2->setcity("pune");
echo $obj2->getcity();

$obj3=new Employesalary();

$obj3->salary='45000';
echo $obj3->salary;
?>

