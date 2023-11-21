<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $students=[], $student;

    public function getAllStudent(){
        return $this->students = [
            [
                'id'=> 1,
                'name'=> 'Raihan',
                'phone'=> '01740446744',
                'email'=> 'raihankobir48@gmail.com',
                'address'=> 'Darus-Salam,Mirpur, Dhaka-1216.',
                'department'=>'web development',
                'department_id'=> 1

            ],
            [
                'id'=> 2,
                'name'=> 'Raihan2',
                'phone'=> '01740446744',
                'email'=> 'raihankobir48@gmail.com',
                'address'=> 'Darus-Salam,Mirpur, Dhaka-1216.',
                'department'=>'web design',
                'department_id'=> 2

            ],
            [
                'id'=> 3,
                'name'=> 'Raihan3',
                'phone'=> '01740446744',
                'email'=> 'raihankobir48@gmail.com',
                'address'=> 'Darus-Salam,Mirpur, Dhaka-1216.',
                'department'=>'digital marketing',
                'department_id'=> 3


            ],
            [
                'id'=> 4,
                'name'=> 'Raihan4',
                'phone'=> '01740446744',
                'email'=> 'raihankobir48@gmail.com',
                'address'=> 'Darus-Salam,Mirpur, Dhaka-1216.',
                'department'=>'app development',
                'department_id'=> 4

            ]
        ];
    }

    public function getStudentById($id){
        $this->students=$this->getAllStudent();
        foreach ($this->students as $this->student)
        {
            if ($this->student['id'] == $id){
                return $this->student;
            }
        }
    }
}
