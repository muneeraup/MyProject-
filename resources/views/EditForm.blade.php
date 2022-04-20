<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <br><br><br><br><br><br>
      <form action="{{route('update.form',['id' =>$user ->id])}}" method="post">
       @method('put')
        @csrf
          <div class="container">
            <div class="row">  
                <div class="form-group col-md-6">
                    <label for="">Name</label>
                    <input type="text" name="Name" class="form-control" value="{{$user->Name}}" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Email</label>
                    <input type="email" name="Email" class="form-control" value="{{$user->Email}}"  required>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Father Name</label>
                    <input type="text" name="Fathername" class="form-control" value="{{$user->Fathername}}"  required>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Qualification</label>
                    <select name="Qualification" id="Qualification" class="form-control" value="{{$user->Qualification}}" required>
                        <option value="FA">FA</option>
                        <option value="FSC">FSC</option>
                        <option value="Bachelor">Bachelor</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Date Of birth</label>
                    <input type="date" name="Dob" class="form-control" value="{{$user->Dob}}" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Course</label>
                    <input type="text" name="Course" class="form-control" value="{{$user->Course}}"  required>
                </div>
                <div class="form-group text-center" >
                    <button type="submit" class="btn btn-primary" >Update</button>
                </div>
            </div>
          </div>
      </form>
   
  </body>
</html>