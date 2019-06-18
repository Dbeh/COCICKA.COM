<?php
  class Worker
  {

    private $name;

    public $age;

    private $salary;

    public function __construct($name, $age,$salary){
      $this->name = $name;
      $this->age = $age;
      $this->salary = $salary;

    }

    /**
     * Get the value of Name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * Get the value of Salary
     *
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    public function getAge()
    {
        return $this->age;
    }

}

  $w1 = new Worker('Дима', 25, 1000);

  echo ($w1->getSalary()*$w1->getAge());

?>
