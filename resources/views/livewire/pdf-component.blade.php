<!DOCTYPE html>
<html>
<head>
	<title>Laporan SPP</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
                <th>NISN</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>SPP</th>
                <th>Tahun</th>
                <th>Bulan</th>
			</tr>
		</thead>
		<tbody>
            @php $i=1 @endphp
            @foreach ($pembayaran as $key)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{$key->nisn}}</td>
                <td>{{$key->nis}}</td>
                <td>{{$key->nama}}</td>
                <td>{{$key->nama_kelas}}</td>
                <td>{{$key->nominal}}</td>
                <td>{{$key->tahun_dibayar}}</td>
                <td>{{$key->bulan_dibayar}}</td>
            </tr>
            @endforeach
        </tbody>
	</table>
</body>
</html>