@if ($errors->any())
<div class="alert alert-danger mt-3">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if ($message = Session::get('success'))
<div class="alert alert-success mt-3" role="alert">
    {{ $message }}
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger mt-3" role="alert">
    {{ $message }}
</div>
@endif