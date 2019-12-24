@extends('layouts.admin')

@section('content')
<br>
<div class="container center_div">
    <div class="card-body">
        <h4>Assign Teacher In Course</h4>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="btn-group dropright">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Select Semester
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">1</a>
                        <a class="dropdown-item" href="#">2</a>
                        <a class="dropdown-item" href="#">3</a>
                        <a class="dropdown-item" href="#">4</a>
                        <a class="dropdown-item" href="#">5</a>
                        <a class="dropdown-item" href="#">6</a>
                        <a class="dropdown-item" href="#">7</a>
                        <a class="dropdown-item" href="#">8</a>
                    </div>
                </div>

                <div class="mt-5"></div>

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Username</th>
                            <th scope="col">Name</th>
                            <th scope="col">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>rafee</td>
                            <td>Mushtaq Shahriyar Rafee</td>
                            <td><input type="checkbox"></td>

                            <!-- <input class="form-control input-sm" id="inputsm" type="text"> -->
                        </tr>
                    </tbody>
                </table>

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</div><!--  -->
@endsection