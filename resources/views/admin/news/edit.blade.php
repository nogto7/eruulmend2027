@extends('admin/layout')

@section('content')
<div class="section_container">
    <div class="section_line">
        <h1 class="title">Мэдээллийг засах</h1>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('admin.news.update', $news) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="form_item">
                <label class="form_label">Гарчиг</label>
                <input type="text" name="title" class="form_input" value="{{ old('title', $news->title) }}">
                @error('title')<p>{{ $message }}</p>@enderror
            </div>

            <div class="form_item">
                <label class="form_label">Товч агуулга</label>
                <textarea name="excerpt" class="form_textarea">{{ old('excerpt', $news->excerpt) }}</textarea>
                @error('excerpt')<p>{{ $message }}</p>@enderror
            </div>

            <div class="form_item">
                <label class="form_label">Агуулга</label>
                <textarea name="content" id="content" class="form_textarea">{{ old('content', $news->content) }}</textarea>
                @error('content')<p>{{ $message }}</p>@enderror
            </div>

            {{-- <div class="form_item">
                <label>Зураг</label>
                <input type="file" name="images">
                @if($news->images)
                    <img src="{{ asset('storage/'.$news->images) }}" alt="" width="100">
                @endif
                @error('images')<p>{{ $message }}</p>@enderror
            </div> --}}

            <div class="form_item">
                <label>Идэвхтэй эсэх</label>
                <input type="checkbox" name="is_active" value="1" {{ $news->is_active ? 'checked' : '' }}>
            </div>

            <button type="submit" class="em_button btn_primary">Шинэчлэх</button>
        </form>
    </div>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor.create(document.querySelector('#content'), {
        ckfinder: {
            uploadUrl: "{{ route('admin.news.upload') }}?_token={{ csrf_token() }}"
        },
        image: {
            resizeOptions: [
                { name: 'resizeImage:original', label: '100%', value: null },
                { name: 'resizeImage:50', label: '50%', value: '50' },
                { name: 'resizeImage:75', label: '75%', value: '75' }
            ],
            toolbar: [
                'imageTextAlternative',
                'imageStyle:inline',
                'imageStyle:block',
                'imageStyle:side',
                'resizeImage'
            ]
        }
    })
    .catch(error => console.error(error));
</script>
@endsection
