<form action="{{url('santri/create')}}"" method="post">
	Nama : <input type="text" name="nama"><br>
	Alamat : <input type="text" name="alamat"><br>
	Tgl Lahir : <input type="text" name="tgl_lahir"><br>
	Jenis Kelamain : <input type="radio" name="jenis_kelamin" value="L">Laki_laki <input type="radio" name="jenis_kelamin" value="P">Perempuan<br>
	{{csrf_field()}}
	<button type="submit">Submit</button>
	

</form>