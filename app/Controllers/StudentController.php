<?php

namespace App\Controllers;

use App\Services\StudentService;

class StudentController{

    public function index($id) {

        $service = new StudentService();
        $printData = $service->printStudent($id);

        if(!$printData){
            echo 'The student is not found';
        } else {
            switch ($printData['format']) {
                case 'JSON':
                    echo header("Content-type: application/json");
                    break;
                case 'XML':
                    echo header("Content-type: text/xml");
                    break;
            }

            echo $printData['string'];
        }
    }

}