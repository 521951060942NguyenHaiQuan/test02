
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<h1>
    Đây là danh sách các sinh viên
</h1>
<br>
<td><a  href="{{ route('create_student') }}"><button type="button" class="btn btn-success">Add Student</button></a></td>
<br>
<table class="table table-bordered">
    <tr>
        <th>Number</th>
        <th>Full name</th>
        <th>Birth Day</th>
        <th>Address</th>
        <th>Update Student</th>
        <th>Delete Student</th>
        <th>Detail</th>
    </tr>
    @foreach($students as $student )
    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->full_name }}</td>
        <td>{{ $student->birthday }}</td>
        <td>{{ $student->address }}</td>
        <td>
            <a  href="{{ route('edit',[$student->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <button type="button" class="btn btn-primary">Update Student</button>
            </a>
        </td>
        <td>
            <form action="{{ route('destroy',[$student->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete Student</button>
            </form>
        </td>
        <td><a  href=""><button type="button" class="btn btn-success">Detail</button></a></td>
    </tr>

    @endforeach


</table>

