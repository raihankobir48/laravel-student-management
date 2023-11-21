<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("asset/css/bootstrap.css")}}">
</head>
<body>
@include('include.header')
<section class="pt-5">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            Student Manage
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-border">
                                <tr>
                                    <th>Sl</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Department</th>
                                    <th>Action</th>
                                </tr>

                                @foreach($students as $student)
                                <tr>
                                    <td>{{$student['id']}}</td>
                                    <td>{{$student['name']}}</td>
                                    <td>{{$student['phone']}}</td>
                                    <td>{{$student['email']}}</td>
                                    <td>{{$student['address']}}</td>
                                    <td>{{$student['department']}}</td>
                                    <td>
                                    <a href="{{ route('student.details',['id'=>$student['id']])}}">details</a>

                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{asset('asset/jss/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
