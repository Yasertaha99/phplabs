<?php
class Human {
    protected $id;
    protected $name;
    protected $age;
    protected $gender;
    protected $address;

    public function __construct($id, $name, $age, $gender, $address) {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->address = $address;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getAddress() {
        return $this->address;
    }

    public function introduce() {
        return "Hello, my name is " . $this->name . ", I am " . $this->age . " years old, and I live at " . $this->address . ".";
    }
}
?>
