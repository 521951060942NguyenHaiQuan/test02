
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <h1>Đây là trang sửa sinh vien</h1>
    <br>
    <form action="{{ route('edit',$student->id)}}"method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Full Name</label>
          <input type="text" name="full_name"class="form-control" value="{{ $student->full_name}}">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Birth Day</label>
          <input type="date" name="birthday" class="form-control" value="{{ $student->birthday}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Address</label>
            <input type="text"name="address" class="form-control" value="{{ $student->address}}">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

