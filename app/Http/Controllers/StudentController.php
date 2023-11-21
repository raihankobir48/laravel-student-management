<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Department;


use Illuminate\Http\Request;

class StudentController extends Controller
{
    public $student, $students, $studentInfoById, $department, $departments=[];
    public function manage(){
       $this->student =  new Student();
       $this->students = $this->student->getAllStudent();

       $this->department = new Department();
       $this->departments = $this->department->getAllDepartment();
        return view('student.manage',[
            'students'=>$this->students,
            'department_infos' => $this->departments
        ]);

    }

    public function details($id){
        $this->student =  new Student();
        $this->studentInfoById =$this->student->getStudentById($id);

       $this->department = new Department();
       $this->departments = $this->department->getAllDepartment();
        return view('student.details', [
            'student' => $this->studentInfoById,
            'department_infos' => $this->departments

        ]);
    }
}
