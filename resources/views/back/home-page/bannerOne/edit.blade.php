@extends('master.back')

@section('content')

<div class="card shadow mb-4">
    <div class="card-body">

        <form action="{{ route('back.first.home.page.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Image</label>

                <input type="file" name="banner_first" class="form-control" id="banner_first">

                <br>

                <img id="banner_preview"
                     src="{{ $banner->banner_first ? asset('storage/'.$banner->banner_first) : asset('assets/images/placeholder.png') }}"
                     style="max-height:150px">
            </div>

            <div class="form-group">
                <label>URL</label>
                <input type="text" class="form-control" name="url_first" value="{{ $banner->url_first }}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>

        </form>

    </div>
</div>

<script>
document.getElementById('banner_first').addEventListener('change', e => {
    const file = e.target.files[0];
    if (!file) return;

    const reader = new FileReader();
    reader.onload = e => document.getElementById('banner_preview').src = e.target.result;
    reader.readAsDataURL(file);
});
</script>

@endsection
