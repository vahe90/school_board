<?php

namespace App\Factory;

use App\Strategy\School\School;
use App\Strategy\School\SchoolCSM;
use App\Strategy\School\SchoolCSMB;
use Doctrine\DBAL\Exception;

class SchoolFactory{

    public function getSchool($student): School
    {
        switch ($student->getSchool()){
            case 'CSM':
                return new SchoolCSM($student);
            case 'CSMB':
                return new SchoolCSMB($student);
            default:
                throw new Exception('Invalid School');
        }
    }

}