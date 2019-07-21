@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                @if($errors->any())
                <h4>{{$errors->first()}}</h4>
                @endif
                <div class="card-body">
                    <button ><a href="/WebIntern/public/start/new">Chơi mới</a></button>
                    <button><a href="/WebIntern/public/start/old">Chơi Tiếp</a></button>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
