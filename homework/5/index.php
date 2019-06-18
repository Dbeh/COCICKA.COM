<?php
  class User
  {

    protected $name;

    protected $age;


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

}


  class Worker extends User
  {

    private $salary;



    /**
     * Get the value of Set the value of Age
     *
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Set the value of Set the value of Age
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


  /**
   *
   */
  class Student extends User
  {

    private $grants;

    private $course;


    /**
     * Get the value of Grants
     *
     * @return mixed
     */
    public function getGrants()
    {
        return $this->grants;
    }

    /**
     * Set the value of Grants
     *
     * @param mixed grants
     *
     * @return self
     */
    public function setGrants($grants)
    {
        $this->grants = $grants;

    }

    /**
     * Get the value of Course
     *
     * @return mixed
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Set the value of Course
     *
     * @param mixed course
     *
     * @return self
     */
    public function setCourse($course)
    {
        $this->course = $course;

    }

}


?>
