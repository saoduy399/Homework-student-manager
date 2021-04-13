<?php


class Student{

    private $id;
    private $name;
    private $dob;
    private $age;
    private $math;
    private $physic;
    private $chemistry;

    public function __construct($id,$name,$dob,$age,$math,$physic,$chemistry)
    {
        $this->id=$id;
        $this->name=$name;
        $this->dob=$dob;
        $this->age=$age;
        $this->math=$math;
        $this->physic=$physic;
        $this->chemistry=$chemistry;


    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * @param mixed $dob
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getMath()
    {
        return $this->math;
    }

    /**
     * @param mixed $math
     */
    public function setMath($math)
    {
        $this->math = $math;
    }

    /**
     * @return mixed
     */
    public function getPhysic()
    {
        return $this->physic;
    }

    /**
     * @param mixed $physic
     */
    public function setPhysic($physic)
    {
        $this->physic = $physic;
    }

    /**
     * @return mixed
     */
    public function getChemistry()
    {
        return $this->chemistry;
    }

    /**
     * @param mixed $chemistry
     */
    public function setChemistry($chemistry)
    {
        $this->chemistry = $chemistry;
    }
}