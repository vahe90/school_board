<?php

namespace App\Strategy\Formatter;


use App\Entities\Student;

class FormatterXML implements Formatter
{
    const FORMAT = 'XML';
    public $student;

    public function __construct(Student $student)
    {
        $this->student = $student;
    }

    public function printResponse(): string
    {
        $a = <<<XML
<?xml version='1.0' standalone='yes'?>
<student>
    <id>{$this->student->getId()}</id>
    <name>{$this->student->getName()}</name>
    <grades>
XML;

        foreach ($this->student->getGrades() as $grade) {
            $a .= <<<XML
<grade>{$grade}</grade>
XML;
        }

        $a .= <<<XML
    </grades>
    <average>{$this->student->getAverage()}</average>
    <final_result>{$this->student->getFinalResult()}</final_result>
</student>
XML;
return $a;
    }

}