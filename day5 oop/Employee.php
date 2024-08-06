<?php
include 'Human.php';

class Employee extends Human {
    private $jobTitle;
    private $salary;

    public function __construct($id, $name, $age, $gender, $address, $jobTitle, $salary) {
        parent::__construct($id, $name, $age, $gender, $address); 
        $this->jobTitle = $jobTitle;
        $this->salary = $salary;
    }

    public function getJobTitle() {
        return $this->jobTitle;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function introduce() {
        return parent::introduce() . "<br>"." I work as a " . $this->jobTitle . " and I earn $" . $this->salary . "at Manth.";
    }
}
?>
