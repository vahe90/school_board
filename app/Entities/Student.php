<?php

namespace App\Entities;

class Student {

    private $id;
    private $name;
    private $school;
    private $grades;
    private $finalResult;

    public function __construct($studentModel)
    {
        $this->id = $studentModel->id;
        $this->name = $studentModel->name;
        $this->school = $studentModel->school;
        $this->grades = array_column($studentModel->grades->toArray(), 'grade');
    }


    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getSchool(){
        return $this->school;
    }

    public function getGrades(){
        return $this->grades;
    }

    public function getAverage(){
        if(!$this->grades){
            return 0;
        }

        return array_sum($this->grades)/count($this->grades);
    }

    public function getFinalResult(){
        return ($this->finalResult ? 'Passed':'Failed');
    }

    public function setFinalResult(Bool $finalResult){
        $this->finalResult = $finalResult;
    }

}