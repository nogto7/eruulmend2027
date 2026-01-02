@extends('admin.layout')
@section('content')
<!-- resources/views/admin/news/create.blade.php -->
<div class="section_container">
    <div class="section_line">
        <a href="{{ route('admin.news.create') }}" class="em_button btn_second">Шинэ мэдээ нэмэх</a>

        <table class="table_content">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Гарчиг</th>
                    <th>Товч танилцуулга</th>
                    <th>Агуулга</th>
                    <th>Үйлдэл</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($newsList as $key => $item)
                    <tr>
                        <td>{{ $newsList->firstItem() + $key }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->excerpt }}</td>
                        <td>{{ strip_tags(Str::limit($item->content, 240)) }}</td>
                        <td>
                            <a href="{{ route('admin.news.edit', $item) }}" class="btn btn-sm btn-warning">Засах</a>

                            <form action="{{ route('admin.news.destroy', $item) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Та устгахдаа итгэлтэй байна уу?')">Устгах</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">Мэдээ олдсонгүй</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
