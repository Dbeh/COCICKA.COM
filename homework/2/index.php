<?php
  class Worker
  {

    private $name;

    private $age;

    private $salary;



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
     * Set the value of Name
     *
     * @param mixed name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

    }

    /**
     * Get the value of Age
     *
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of Age
     *
     * @param mixed age
     *
     * @return self
     */
    public function setAge($age)
    {
        $this->age = $age;

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

    /**
     * Set the value of Salary
     *
     * @param mixed salary
     *
     * @return self
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;

    }

}

  $w1 = new Worker();
  $w1->setName('Иван');
  $w1->setAge(25);
  $w1->setSalary(1000);


  $w2 = new Worker();
  $w2->setName('Вася');
  $w2->setAge(26);
  $w2->setSalary(2000);

  echo ($w1->getSalary()+$w2->getSalary());
  echo "<br>";
  echo ($w1->getAge()+$w2->getAge());

?>
