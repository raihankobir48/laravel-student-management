<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $department, $depatments = [];
    public function index(){
        $this->department = new Department();
        $this->depatments = $this->department->getAllDepartment();
        return view('index',[
            'department_infos' => $this->depatments
        ]
    );
    }
}
