@section('estilos')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">

@endsection

<div class="p-3">

    <div class="card mb-3">
        <h5 class="card-header">Teste</h5>
        <div class="card-body">
            <h5 class="card-title">Subtítulo</h5>
            <p class="card-text">{{ $content }}</p>

            <p> @error('content') {{ $message }} @enderror </p>

            <form method="post" wire:submit.prevent="store">
                <div class="form-group">
                    <label for="content">Vamos mudar o valor da menssagem</label>
                    <input type="text" class="form-control" id="content" wire:model="content">
                </div>
                <button type="submit" class="btn btn-primary">Criar Tweet</button>
            </form>
        </div>
    </div>

    <div class="card mb-3">
        <h5 class="card-header">Show Tweets</h5>
        <div class="card-body">
            <livewire:datatable model="App\User" exclude="" />

            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Foto de Perfil</th>
                        <th>Usuário</th>
                        <th>Tweet</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($tweets as $tweet)
                    <tr>
                        <td>
                            @if ($tweet->user->getPhotoAttribute())
                            <img src="{{ url("storage/{$tweet->user->getPhotoAttribute()}") }}" class="rounded-full h-8
                            w-8">
                            @else
                            Sem foto
                            @endif
                        </td>
                        <td>{{ $tweet->user->name }}</td>
                        <td>{{ $tweet->content }}</td>
                        @if ($tweet->likes->count())
                        <td> <a class="btn btn-danger" href="#" role="button"
                                wire:click.prevent="unlike({{ $tweet->id }})">Descurtir</a> </td>
                        @else
                        <td> <a class="btn btn-success" href="#" role="button"
                                wire:click.prevent="like({{ $tweet->id }})">Curtir</a> </td>
                        @endif
                    </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>Foto de Perfil</th>
                        <th>Usuário</th>
                        <th>Tweet</th>
                        <th>Ação</th>
                    </tr>
                </tfoot>
            </table>

        </div>
    </div>

</div>

@section('scripts')

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>


<script>
    $(document).ready(function() {
    
        $('#example').dataTable( {
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.11.3/i18n/pt_br.json"
            }
        } );
    } );
</script>

@endsection