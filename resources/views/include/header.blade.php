<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <ul class="navbar-nav">
            <li>
                <a href="{{route('home')}}" class="nav-link">Home</a>
            </li>
            <li>
                <a href="" class="nav-link">Student Add</a>
            </li>
            <li>
                <a href="{{route('student.manage')}}" class="nav-link">Student Manage</a>
            </li>
            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Department</a>
                <ul class="dropdown-menu">
                            @foreach ($department_infos as $department_info )
                            <li>
                                <a href="{{ route('department.student',['id'=> $department_info['id']]) }}" class="dropdown-item">
                                {{ $department_info['name'] }}
                            </a>
                            </li>
                            @endforeach


                </ul>
            </li>
            <li>
                <a href="{{ route('department.manage') }}" class="nav-link">Department Manage</a>
            </li>
        </ul>
    </div>
</nav>
