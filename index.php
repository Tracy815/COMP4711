<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('student.php');
        
        $students = array();
        
        $first = new Student();
        $first->surname = "Einstein";
        $first->firstname = "Albert";
        $first->add_email('home', 'albert@braniacs.com');
        $first->add_email('work1', 'a_einstein@bcit.ca');
        $first->add_email('work2', 'albert@physics.mit.edu');
        $first->add_grade(95);
        $first->add_grade(80);
        $first->add_grade(50);
        $students[$first->firstname.$first->surname] = $first;
        
        $second = new Student();
        $second->surname = "Doe";
        $second->firstname = "John";
        $second->add_email('home', 'john@doe.com');
        $second->add_email('work', 'jdoe@mcdonalds.com');
        $second->add_grade(65);
        $second->add_grade(75);
        $second->add_grade(55);
        $students[$second->firstname.$first->surname] = $second;
        
        $third = new Student();
        $third->surname = "Liu";
        $third->firstname = "Tracy";
        $third->add_email('home', 'tracy@liu.com');
        $third->add_email('work', 'tracyliu@bcit.ca');
        $third->add_grade(90);
        $third->add_grade(80);
        $third->add_grade(76);
        $students[$third->firstname.$first->surname] = $third;
        
        ksort($students);
        
        foreach ($students as $student){
            echo $student->toString();
        }
              
        
        ?>
    </body>
</html>
