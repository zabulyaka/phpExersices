<?php  

class Student {

private $name;
private $age;
private $group;

public function setName($name) {
	return $this->name=$name;
}
public function setAge($age) {
	return $this->age=$age;
}
public function setGroup($group) {
	return $this->group=$group;
}
public function getName() {
	return $this->name;
}
public function getAge() {
	return $this->age;
}
public function getGroup() {
	return $this->group;
}


}

$ivan=new Student;
$vasya=new Student;

$ivan->setName('Иван');
$ivan->setAge(21);
$ivan->setGroup('U1001');

$vasya->setName('Вася');
$vasya->setAge(20);
$vasya->setGroup('U1002');

echo 'Группа Ивана: '.$ivan->getGroup().'<br /> Группа Васи: '.$vasya->getGroup().'<br /><br />';
echo 'Сумма возрастов Ивана и Васи: ', $ivan->getAge() + $vasya->getAge();

?>