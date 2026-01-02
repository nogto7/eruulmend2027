@extends('layout')
@section('content')
<!-- resources/views/admin/news/create.blade.php -->
<div class="section_container">
    <div class="section_line">
        <form method="POST" action="{{ route('admin.news.store') }}">
            @csrf
            <div class="form_item">
                <label class="form_label">Гарчиг</label>
                <input name="title" class="form_input" placeholder="Гарчиг">
            </div>
            <div class="form_item">
                <label class="form_label">Мэдээний линк /Гарчиг товч утга/</label>
                <input name="excerpt" class="form_input" placeholder="Мэдээний линк">
            </div>
            <div class="form_item">
                <label class="form_label">Мэдээний агуулга</label>
                <textarea name="content" id="content"></textarea>
            </div>
            <div class="form_item">
                <label class="form-radiobox-label">
                    <input type="radio" name="is_active" value="1" class="form-radiobox hidden" >
                    <span class="form-radiomark"></span>
                    <span class="label-text">Нийтлэх</span>
                </label>
            </div>
            <button class="em_button btn_primary">Хадгалах</button>
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
                { name: 'resizeImage:original', label: 'Original', value: null },
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
