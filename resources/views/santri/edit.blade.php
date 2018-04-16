<<form action="{{url('santri/update')}}" method="post">
	<input type="hidden" name="id" value="{{$santri->id}}">
	Nama : <input type="text" name="nama" value="{{$santri->nama}}"><br>
	Alamat : <input type="text" name="alamat" value="{{$santri->alamat}}"><br>
	Tgl Lahir : <input type="text" name="tgl_lahir" value="{{$santri->tgl_lahir}}"><br>

	Jenis Kelamin : <input type="radio" name="jenis_kelamin" value="L" {{($santri->jenis_kelamin == 'L') ? 'checked':''}} > Laki-laki |

	<input type="radio" name="jenis_kelamin" value="L" {{($santri->jenis_kelamin == 'P') ? 'checked':''}} > Perempuan <br>

	{{csrf_field()}}
	<button type="submit">Submit</button>
	
</form>