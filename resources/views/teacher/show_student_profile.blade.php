@extends('layouts.teacher')

@section('content')
<br>
<div class="container center_div">
    <div class="card-body">
        <h4>Student Profile "{{ $student->username }}"</h4>
        <br>
        <div class="row">
            <div class="input-group mb-3" style="width: 700px;">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default" style="width: 200px;">Name</span>
                    <span class="input-group-text" id="inputGroup-sizing-default" style="width: 500px;">{{ $student->name }}</span>
                </div>
            </div>
            <div class="input-group mb-3" style="width: 700px;">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default" style="width: 200px;">Registration No</span>
                    <span class="input-group-text" id="inputGroup-sizing-default" style="width: 500px;">{{ $student->username }}</span>
                </div>
            </div>
            <div class="input-group mb-3" style="width: 700px;">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default" style="width: 200px;">Email</span>
                    <span class="input-group-text" id="inputGroup-sizing-default" style="width: 500px;">{{ $student->email }}</span>
                </div>

            </div>
            <div class="input-group mb-3" style="width: 700px;">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default" style="width: 200px;">Date of Birth(DD/MM/YY)</span>
                    <span class="input-group-text" id="inputGroup-sizing-default" style="width: 500px;">{{ $student->dob }}</span>
                </div>

            </div>
            <div class="input-group mb-3" style="width: 700px;">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default" style="width: 200px;">Contact Number</span>
                    <span class="input-group-text" id="inputGroup-sizing-default" style="width: 500px;">{{ $student->phone }}</span>
                </div>

            </div>
            <div class="input-group mb-3" style="width: 700px;">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default" style="width: 200px;">Address</span>
                    <span class="input-group-text" id="inputGroup-sizing-default" style="width: 500px;">{{ $student->address }}</span>
                </div>
            </div>

        </div>
    </div>
    <div class="card-body">
        <h4>Courses & Results</h4>
        <br>
        <div class="row">
            <div class="col-md-6">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Course Code</th>
                            <th scope="col">Course Title</th>
                            <th scope="col">Credit</th>
                            <th scope="col">Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="cursor:pointer;" class="hello" onclick="window.location='{{route('my_courses_1')}}';">
                            <th scope="row">1</th>
                            <td>CSE332</td>
                            <td>Software Engineering & Design Patterns Lab</td>
                            <td>1.5</td>
                            <td>GPA</td>

                            <!-- <input class="form-control input-sm" id="inputsm" type="text"> -->
                        </tr>
                    </tbody>
                </table>

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
</div><!--  -->
@endsection