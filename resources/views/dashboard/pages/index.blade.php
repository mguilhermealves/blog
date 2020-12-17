@extends('dashboard.layout.layout')

@section('content')
    @php
        $exist = false;
    @endphp
    @if ($exist)
        <div class="col-12">
            <div class="row">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="col-12" style="text-align: center; top: 50%; position: absolute">
            <div class="row">
                <p>Não existe noticia para ser exibido...</p>
            </div>
        </div>
    @endif
    
@endsection