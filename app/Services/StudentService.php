<?php

namespace App\Services;

use App\Factory\SchoolFactory;
use App\Factory\FormatterFactory;
use App\Entities\Student;
use App\Models\StudentModel;
use App\Strategy\StudentStrategy;

class StudentService
{

    public function printStudent($id){

        $student = new Student(StudentModel::with('grades')->find($id));

        $schoolFactory = new SchoolFactory();
        $schoolObject = $schoolFactory->getSchool($student);

        $formatterFactory = new FormatterFactory();
        $formatterObject = $formatterFactory->getFormatter($student);

        $studentStrategy = new StudentStrategy($schoolObject, $formatterObject);

        return $studentStrategy->format($student);

    }
}