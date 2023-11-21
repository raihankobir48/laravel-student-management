<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    public $department, $departments =[], $student, $students=[], $getStudents=[];

    public function getAllDepartment(){
       return $this->departments = [
            [
                'id' => 1,
                'name'=> 'Web Development'
            ],

            [
                'id' => 2,
                'name'=> 'Web Design'
            ],
            [
                'id' => 3,
                'name'=> 'Digital Marketing'
            ],
            [
                'id' => 4,
                'name'=> 'App Development'
            ],
        ];
    }

    public function getStudentByDepartmentId($id){
        $this->student = new Student();
        $this->students = $this->student->getAllStudent();


        foreach ($this->students as $this->student)
        {
            if ($this->student['department_id'] == $id){
                array_push($this->getStudents, $this->student);
            }
        }
        return $this->getStudents;

    }
}
