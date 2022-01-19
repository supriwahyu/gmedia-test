<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title></title>
</head>
<body>
    <div class="d-flex justify-content-center">
    <form action="{{route('update')}}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="card-body pad">
            <div class="form-group">
              <label class="form-label">nama</label>
              <input type="text" name="nama" class="form-control" placeholder="" required/>
            </div>
            <div class="form-group">
                <label class="form-label">alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder=""  required/>
            </div>
            <div class="form-group">
                <label class="form-label">gender</label>
                <select name="gender" id="gender" >
				  <option value="L">laki-laki</option>
				  <option value="P">perempuan</option>
				</select>
            </div>
            <div class="form-group">
                <label class="form-label">Tanggal lahir</label>
                <input type="date" name="tgl_lahir" class="form-control" placeholder="" required/>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary w-100">Simpan karyawan</button>
        </div>
    </form>
</div>
</body>
</html>