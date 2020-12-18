@extends('dashboard.layout.app')

@section('content')
    <div class="col-6" id="news">
        <div class="row">
            <div class="container">
                <h1 style="text-align: center">Criar Notícia</h1>
                <div class="form-group">
                    <label>Título</label>
                    <input type="text" class="form-control" id="title" placeholder="Digite o título">
                </div>
                <div class="form-group">
                    <label>Categoria</label>
                    <select class="form-control" id="category">
                      <option>Selecione</option>
                      <option>Esportes</option>
                      <option>Celebridades</option>
                      <option>Tecnologia</option>
                      <option>Politica</option>
                    </select>
                  </div>
                <div class="form-group">
                    <label>Descrição</label>
                    <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
                    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
                    <textarea class="form-control" id="descript" rows="6" style="resize: none"></textarea>
                </div>
                <div class="form-group">
                  <label>Imagem</label>
                  <input type="file" id="img" class="form-control">
                </div>
            <br />
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#saveNews">
              Enviar
            </button>
            
        </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="saveNews" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                </div>
                <div class="modal-body">
                    Tem certeza que deseja enviar a noticia ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                    <button type="button" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    #news {
        position: absolute;
        left: 25%;
        top: 15%;
    }
</style>