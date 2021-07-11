
{{-- entendendo a a pagina main--}}
@extends('layortes.main')

{{--puxando cabeçalho da pagina --}}
@section('content')

    <p> Pagina de Criar evento</p>

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie o seu evento</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
          @csrf

          <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" id="image" required  accept="image/*" class="form-control-file" name="image">
          </div>
          <br>
          <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" required class="form-control" id="title" name="title" placeholder="Nome do evento">
          </div>
          <div class="form-group">
            <label for="date">Evento:</label>
            <input type="date" required class="form-control" id="date" name="date">
          </div>
          <div class="form-group">
            <label for="cyti">Cidade:</label>
            <input type="text" required class="form-control" id="cyti" name="cyti" placeholder="Local do evento">
          </div>
          <div class="form-group">
            <label for="private">O evento é privado?</label>
            <select name="private" required id="private" class="form-control">
              <option value="0">Não</option>
              <option value="1">Sim</option>
            </select>
          </div>
          <div class="form-group">
            <label for="descript">Descrição:</label>
            <textarea name="descript" required id="descript" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
          </div>
          <div class="form-group">
      <label for="title">Adicione itens de infraestrutura:</label>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Palco"> Palco
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Cerveja grátis"> Cerveja grátis
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Open Food"> Open food
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Brindes"> Brindes
      </div>
    </div>
          <input type="submit" class="btn btn-primary" value="Criar Evento">
        </form>
      </div>

@endsection

