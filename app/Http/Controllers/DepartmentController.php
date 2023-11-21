<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public $department, $departments=[], $getStudentByDepartment;
    public function index(){

        $this->department = new Department();
        $this->departments = $this->department->getAllDepartment();

        return view('department.department-manage',['department_infos' => $this->departments]);
    }

    public function departmentStudent($id){
        $this->department = new Department();
        $this->getStudentByDepartment = $this->department->getStudentByDepartmentId($id);

        $this->department = new Department();
        $this->departments = $this->department->getAllDepartment();

        return view('department.department-student', [
            'getStudentByDepartmentInfos' => $this->getStudentByDepartment,
            'department_infos' => $this->departments
        ]);
    }
}
