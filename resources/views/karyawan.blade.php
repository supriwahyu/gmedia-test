<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title></title>
</head>
<body>

	<a href="{{route('create')}}">tambah karyawan</a>
	<div class="card-body table-full-width table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <th>No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </thead>
            
            <tbody>
                <tr>
                    <td></td>
                    <td>{{$response['response'][0]['nip']}}</td>
                    <td>{{$response['response'][0]['nama']}}</td>
                    <td>{{$response['response'][0]['alamat']}}</td>
                    <td> <form method="POST" action="">
	                        @csrf
	                        <input type="hidden" name="_method" value="DELETE" />
	                        <div class="btn-group">
	                            <!-- <a class="btn btn-info" href="{{ URL::route('view') }}">Lihat</a> -->
	                            <a class="btn btn-success" href="{{route('edit', $response['response'][0])}}" title="Ubah Data ">Ubah</a>
	                            <button title="Hapus Data" onclick="confirmDelete()" type="submit" class="btn btn-danger">Hapus</button>
	                        </div>
	                    </form>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>{{$response['response'][1]['nip']}}</td>
                    <td>{{$response['response'][1]['nama']}}</td>
                    <td>{{$response['response'][1]['alamat']}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>{{$response['response'][2]['nip']}}</td>
                    <td>{{$response['response'][2]['nama']}}</td>
                    <td>{{$response['response'][2]['alamat']}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>{{$response['response'][3]['nip']}}</td>
                    <td>{{$response['response'][3]['nama']}}</td>
                    <td>{{$response['response'][3]['alamat']}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>{{$response['response'][4]['nip']}}</td>
                    <td>{{$response['response'][4]['nama']}}</td>
                    <td>{{$response['response'][4]['alamat']}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>{{$response['response'][5]['nip']}}</td>
                    <td>{{$response['response'][5]['nama']}}</td>
                    <td>{{$response['response'][5]['alamat']}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>{{$response['response'][6]['nip']}}</td>
                    <td>{{$response['response'][6]['nama']}}</td>
                    <td>{{$response['response'][6]['alamat']}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>{{$response['response'][7]['nip']}}</td>
                    <td>{{$response['response'][7]['nama']}}</td>
                    <td>{{$response['response'][7]['alamat']}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>{{$response['response'][8]['nip']}}</td>
                    <td>{{$response['response'][8]['nama']}}</td>
                    <td>{{$response['response'][8]['alamat']}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>{{$response['response'][9]['nip']}}</td>
                    <td>{{$response['response'][9]['nama']}}</td>
                    <td>{{$response['response'][9]['alamat']}}</td>
                    <td></td>
                </tr>
            </tbody>
            
        </table>
      
    </div>
</body>
</html>