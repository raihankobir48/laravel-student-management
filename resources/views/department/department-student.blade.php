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

                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-center">
                            Department
                        </div>
                        <div class="card-body text-center">
                            <table class="table table-hover table-border">
                                <tr>
                                    <th>Sl</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Department</th>

                                </tr>
                                @foreach ($getStudentByDepartmentInfos as $getStudentByDepartmentInfo )
                               <tr>
                                    <td>{{ $getStudentByDepartmentInfo['id'] }}</td>
                                    <td>{{ $getStudentByDepartmentInfo ['name'] }}</td>
                                    <td>{{ $getStudentByDepartmentInfo['phone'] }}</td>
                                    <td>{{ $getStudentByDepartmentInfo['address'] }}</td>
                                    <td>{{ $getStudentByDepartmentInfo['email'] }}</td>
                                    <td>{{ $getStudentByDepartmentInfo['department'] }}</td>
                               </tr>

                                @endforeach

                            </table>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</section>
<script src="{{asset('asset/jss/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
