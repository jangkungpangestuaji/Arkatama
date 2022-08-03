<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tes skill | Programmer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body class="class="d-flex h-100 text-center text-bg-dark">    
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="mb-auto">
        <div>
          <h3 class="float-md-start mb-0 text-white">Arkatama</h3>
        </div>
      </header>

      <main class="mt-5">
        <div class="container">
          <form action="/Insert" method="post">
            @csrf
            <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
            <div class="input-group mb-3">
              <span class="input-group-text label-nama" id="nama">Nama</span>
              <input type="text" class="form-control input-nama" id="input_nama" name="name">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text label-umur" id="umur">Umur</span>
              <input type="number" class="form-control input-umur" id="input_umur" name="age">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text label-kota" id="kota">Kota</span>
              <input type="text" class="form-control input-kota" id="input_kota" name="city">
            </div>
            <div class="input-group justify-content-center mb-3">
              <button class="btn btn-primary" type="submit">Simpan</button>
              <button class="btn btn-warning" type="reset">Hapus</button>
            </div>
          </form>
        </div>
        <div>
        <table class="table bg-white">
                    <thead class="bg-grey color-white">
                        <tr>
                            <th class="col-1 th1">ID</th>
                            <th class="col-1 th1">Name</th>
                            <th class="col-1 th1">Age</th>
                            <th class="col-1 th1">City</th>
                        </tr>
                    </thead>
                    <tbody class="color-white bg-white color-neutral-400">
                        <!-- -->
                        @foreach($data as $key=>$value)
                        <tr>
                            <td class="col-1 td1">{{ $loop->iteration }}</td>
                            <td class="col-1 td1">{{ $value->name}}</td>
                            <td class="col-1 td1">{{ $value->age}}</td>
                            <td class="col-2 td1">{{ $value->city}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
      </main>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>