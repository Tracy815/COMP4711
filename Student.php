<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author Tracy
 */
class Student {
    //put your code here
    
    
    function __construct(){
        $this->surname = '';
        $this->firstname = '';
        $this->emails = array();
        $this->grads = array();
    }
    
    function add_email($which, $address){
        $this->emails[$which] = $address;
    }
    
    function add_grade($grade){
        $this->grades[] = $grade;
    }
    
    function average(){
        $total = 0;
        foreach ($this->grades as $value){
            $total += $value;
        }
        return $total / count($this->grades);
    }
    
    function toString(){
        $result = $this->firstname . " " . $this->surname . "\t";
        $result .=' (' . $this->average(). ")\n";
        foreach ($this->emails as $which =>$what)
            $result .=$which . ': ' .$what . "\n";
        $result .= "\n";
        return '<pre>' . $result . '<pre>';
       
    }
}