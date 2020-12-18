@extends('dashboard.layout.app')

@section('content')
    @php
        $exist = false;
        $title = 'Teste';
        $descript = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.";
    @endphp
    @if ($exist)
        <div class="col-12">
            <div class="row">
                <div class="card" id="card" style="width: 18rem;">
                    <img class="card-img-top" src="" alt="Image da Noticia {{ $title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $title }}</h5>
                        <p class="card-text">{!! substr($descript, 0, 120) !!} ...</p>
                        <a href="#">Ver mais</a>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="col-12" id="noNews">
            <div class="row">
                <p>Nenhuma noticia para ser exibida...</p>
            </div>
        </div>
    @endif
    
@endsection

<style>
    #card {
        margin: 5% 5%;
    }

    #noNews {
        text-align: center; 
        top: 50%; 
        position: absolute  
    }
</style>