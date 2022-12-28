{{-- o bg noticia tem que carregar primeiro pq o laravel carrega um em cima do outro
    por exemplo, carregando a parte inferior primeiro, até a parte superior do site --}}
@extends('resource.footer.headerTags')
@extends('resource.general.bg-noticia')
@extends('resource.header.headerTags')
    
@section('css')
    <link rel="stylesheet" href="/css/diversidadeInclusao.css">
    <link rel="stylesheet" href="/css/bgNoticia.css">
    <link rel="stylesheet" href="/css/footer.css"
@endsection
    
@section('content')
    @section('conteudo')
        <div class="div-noticia">
            <p>&nbsp;</p>
            <h2 class="sobre">titulo</h2>
            <p class="txt">dasdsaddsa</p>
            <p>&nbsp;</p>
        </div>
    @endsection
@endsection