<?php

namespace App\Strategy;

use App\Entities\Student;
use App\Strategy\School\School;
use App\Strategy\Formatter\Formatter;


class StudentStrategy
{
    private $school;
    private $formatter;

    public function __construct(School $school, Formatter $formatter)
    {
        $this->school = $school;
        $this->formatter = $formatter;
    }

    public function format(Student $student)
    {

        $isPassed = $this->school->calculate();
        $student->setFinalResult($isPassed);

        return [
            'string' => $this->formatter->printResponse($student),
            'format' => $this->formatter::FORMAT,
        ];

    }

}