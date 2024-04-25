@extends('admin.sidebar')

@section('content')
<h1 class="text-center">Update Album</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="/update/{{ $albumData->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="text" class="form-label">Nama Album</label>
                            <input type="text" name="nama_album" class="form-control" id="text"
                                aria-describedby="emailHelp" value="{{ $albumData->nama_album }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" required>{{ $albumData->deskripsi }}</textarea>
                          </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tanggal Buat</label>
                            <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ $albumData->tanggal }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

</html>
