<style>
    .card{
        display: flex;
        align-items: center;
        justify-content: center;
        height: 90vh;
        width: 100%;
        margin: 0;
        padding: 0;
        background-color: gray;
    }
    h1{
        width: 600px;
        color: aqua;
        word-spacing: 20px;
        filter: drop-shadow(1px 1px 20px yellow);
    }
    h1:hover{
        text-shadow: 0 0 5px rgba(37, 56, 90),0 0 10px rgba(37, 56, 255),
        0 0 15px rgba(255, 56, 90),0 0 20px rgba(37, 255, 90);
    }
</style>

<div class="card">
    <h1>

<?php
include 'Employee.php';

$employee = new Employee(1, "yasser", 25, "Male", "Minia-Rehana, Egypt", "Software Engineer", 2500);

echo $employee->introduce(); 

?>  

    </h1>
</div>
