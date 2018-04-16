<a href="{{url('santri/create/')}}">Create Santri</a>

@foreach($santri as $row)

-Nama:{{$row->nama}}
-Alamat:{{$row->alamt}}
-Tanggal Lahir:{{$row->tgl_lahir}}
-Jenis Kelamin:{{$row->jenis_kelamin}}
- <a href="{{url('santri/hapus/'.$row->id)}}">Hapus</a>
  <a href="{{url('santri/edit/'.$row->id)}}">Edit</a>
<br>
@endforeach
