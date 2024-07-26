@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $item)
            <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session::get('success'))
    <div class="alert alert-success alert-dismissible fade show">
        <ul>
            <li>{{ session::get('success') }}</li>
        </ul>
    </div>
@endif