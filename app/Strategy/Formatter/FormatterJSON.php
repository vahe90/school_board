<?php

namespace App\Strategy\Formatter;

use App\Entities\Student;

class FormatterJSON implements Formatter
{

    const FORMAT = 'JSON';
    public $student;

    public function __construct(Student $student)
    {
        $this->student = $student;
    }

    public function printResponse(): string
    {
        return json_encode([
            'id' => $this->student->getId(),
            'name' => $this->student->getName(),
            'grades' => $this->student->getGrades(),
            'average' => $this->student->getAverage(),
            'final_result' => $this->student->getFinalResult(),
        ]);
    }

}