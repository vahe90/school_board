<?php

namespace App\Factory;

use App\Strategy\Formatter\Formatter;
use App\Strategy\Formatter\FormatterJSON;
use App\Strategy\Formatter\FormatterXML;
use App\Entities\Student;
use Doctrine\DBAL\Exception;

class FormatterFactory
{

    public function getFormatter(Student $student): Formatter
    {
        switch ($student->getSchool()) {
            case 'CSM':
                return new FormatterJSON($student);
            case 'CSMB':
                return new FormatterXML($student);
            default:
                throw new Exception('Invalid School');
        }
    }

}