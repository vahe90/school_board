<?php

namespace App\Strategy\School;

use App\Entities\Student;

class SchoolCSM implements School{

    public $student;

    public function __construct(Student $student)
    {
        $this->student = $student;
    }

    public function calculate(): bool
    {
        return $this->student->getAverage() >= 7;
    }

}