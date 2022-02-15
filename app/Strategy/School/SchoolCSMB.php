<?php

namespace App\Strategy\School;

use App\Entities\Student;

class SchoolCSMB implements School{

    public $student;

    public function __construct(Student $student)
    {
        $this->student = $student;
    }

    public function calculate(): bool
    {
        $grades = $this->student->getGrades();
        return (count($grades) > 2 && max($grades) > 8);
    }

}