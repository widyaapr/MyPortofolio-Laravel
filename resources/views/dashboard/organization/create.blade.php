@extends('dashboard.layout')

@section('konten')
    <div class="pb-3"><a href="{{route('organization.index')}}" class="btn btn-secondary">Kembali</a></div>

    <form action="{{route('organization.store')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="judul" class="form-label">Nama Organisasi</label>
          <input type="text"
            class="form-control form-control-sm" name="judul" id="judul" aria-describedby="helpId" 
            placeholder="Nama Organisasi" value="{{ Session::get('judul')}}">
        </div>

        <div class="mb-3">
          <label for="info1" class="form-label">Jabatan</label>
          <input type="text"
            class="form-control form-control-sm" name="info1" id="info1" aria-describedby="helpId" 
            placeholder="Jabatan" value="{{ Session::get('info1')}}">
        </div>

  
        <div class="mb-3">
          <div class="row">
            <div class="col-auto">Tanggal Mulai</div>
            <div class="col-auto"><input type="date" class="form-control 
              form-control sm" name="tgl_mulai"
              placeholder="dd/mm/yyy" value="{{Session::get('tgl_mulai')}}"></div>
            <div class="col-auto">Tanggal Akhir</div>
            <div class="col-auto"><input type="date" placeholder="dd/mm/yyyy"
              class="form-control form-control sm" name="tgl_akhir" value="{{Session::get('tgl_akhir')}}"></div>
          </div>
        </div> 

        <div class="mb-3"> 
            <label for="isi" class="form-label">Isi</label>
           <textarea class="form-control summernote"  rows="5" name="isi">{{Session::get('isi')}}</textarea>
        </div>
          <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
     </form>
@endsection