@extends('dashboard.layout')

@section('konten')
    <p class="card-title">organization</p>
    <pb-3><a href="{{route('organization.create')}}" class="btn btn-primary">Tambah organization</a></pb-3>
    <div class="table-responsive">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th class="col-1">No</th>
                    <th>Nama Organisasi</th>
                    <th>Jabatan</th>
                    <th>Tgl Mulai</th>
                    <th>Tgl Akhir</th>
                    <th class="col-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach ($data as $item) 
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$item->judul}}</td>
                    <td>{{$item->info1}}</td>
                    <td>{{$item->tgl_mulai_indo}}</td>
                    
                    <td>{{$item->tgl_akhir_indo}}</td>
                    
                    <td>
                        <a href="{{route('organization.edit', $item->id)}}" class="btn btn-sm btn-warning">Edit</a>
                        <form onsubmit="return confirm('Yakin mau hapus data ini?')"
                        action="{{route('organization.destroy', $item->id)}}" class="d-inline" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" type="submit" name="submit">Del</button>
                    </form>
                    </td>
                </tr>
                <?php $i++; ?>
                @endforeach
                
            </tbody>
        </table>
    </div>
    
@endsection




