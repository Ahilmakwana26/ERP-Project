@if (session('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif
@if ($errors->any())
<div class="alert alert-danger" style="background: rgba(255, 0, 0, 0.2)">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<style>
.alert{
    background: rgba(0, 255, 0, 0.2);
    border-radius: 6px;
    padding: 3px 5px;
    
}
</style>