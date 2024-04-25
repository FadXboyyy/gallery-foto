@extends('admin.sidebar')

@section('content')


    <h1 class="text-center">Tambah Foto</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/upload" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="album_id" class="form-label">Album</label>
                                <select class="form-select" name="album_id">
                                    <option selected>-- Pilih Album --</option>
                                    @if ($albums)
                                        @foreach ($albums as $album)
                                            <option value="{{ $album->id }}" required>{{ $album->nama_album }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Foto</label>
                                <input class="form-control" type="file" name="foto" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


</html>
