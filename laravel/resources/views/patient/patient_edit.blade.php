<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <div class="container">
          <a href="patient_show">Back</a><br><br><br>
         
          <!-- Name, Email, Phone, Age, Gender, Address, Photo -->

          <form action="{{route('patient.update',[$patientArr->id])}}" method="post">
            @csrf
           <div class="container">
             <div class="form-group">
                  <label for="name" class="form-label">name</label>
                  <input type="text" name="name" value="{{$patientArr->name}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  <!-- <small id="helpId" class="text-muted">Help text</small> -->
             </div>
             <div class="form-group">
                  <label for="email" class="form-label">email</label>
                  <input type="email" name="email" value="{{$patientArr->email}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  <!-- <small id="helpId" class="text-muted">Help text</small> -->
             </div>
             <div class="form-grouup">
                  <label for="phone" class="form-label">phone</label>
                  <input type="number" name="phone" value="{{$patientArr->phone}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  <!-- <small id="helpId" class="text-muted">Help text</small> -->
             </div>
             <div class="form-group">
                  <label for="age" class="form-label">age</label>
                  <input type="number" name="age" value="{{$patientArr->age}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  <!-- <small id="helpId" class="text-muted">Help text</small> -->
             </div>
             <div class="form-group">
                  <label for="address" class="form-label">address</label>
                  <input type="text" name="address" value="{{$patientArr->address}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  <!-- <small id="helpId" class="text-muted">Help text</small> -->
             </div>
             <br><br><br>
              <button class="btn btn-primary">
                  Submit
              </button>
            </div>
           </form>
      </div>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>