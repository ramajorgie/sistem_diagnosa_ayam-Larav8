<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title> Table Insert data</title>
  </head>
  <body><br>
  <div style="text-align: center;">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Tambah Gejala</button>
  </div><br>
  <table class="table table-light">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Kode_Gejala</th>
      <th scope="col">Nama Gejala</th>
      <th scope="col">Bobot Gejala</th>
    </tr>
  </thead>
  @foreach($gejalauser as $gejalauser)
  <tbody>
    <tr>
    <th scope="row" >{{ $gejalauser -> id }}</th>
      <td >{{ $gejalauser -> kode_gejala }}</td>
      <td >{{ $gejalauser -> nama_gejala }}</td>
      <td n>{{ $gejalauser -> bobot_gejala }}</td>
    </tr>
    @endforeach
  </tbody>
  </table>
    <!-- MODAL -->
<form action="{{('add_gejala')}}" method="get">
@csrf
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <table class="table table-light">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Kode_Gejala</th>
      <th scope="col">Nama Gejala</th>
      <th scope="col">Bobot Gejala</th>
      <th scope="col">Tambah Gejala</th>
    </tr>
  </thead>
  @foreach($listgejala as $gejala)
  <tbody>
    <tr>
      <th scope="row" >{{ $gejala -> id }}</th>
      <td >{{ $gejala -> kode_gejala }}</td>
      <td >{{ $gejala -> nama_gejala }}</td>
      <td >{{ $gejala -> bobot_gejala }}</td>
      <td>
      <button class="btn btn-primary"><a style="color: white;" href="/add_gejala/{{ $gejala -> id }}">Tambah</a></button>
      </td>
    </tr>
      </tbody>
  @endforeach
  </table>
        </div>
        </div>
    </form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  
</html>


