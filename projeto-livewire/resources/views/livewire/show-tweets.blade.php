@section('estilos')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">

@endsection

<div>
    
    <div class="card mb-3">
        <h5 class="card-header">Teste</h5>
        <div class="card-body">
            <h5 class="card-title">Subtítulo</h5>
            <p class="card-text">{{ $message }}</p>
            <div class="form-group">
                <label for="message">Vamos mudar o valor da menssagem</label>
                <textarea class="form-control" id="message" rows="3" wire:model="message"></textarea>
            </div>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

    <div class="card mb-3">
        <h5 class="card-header">Show Tweets</h5>
        <div class="card-body">

            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Usuário</th>
                        <th>Tweet</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($tweets as $tweet)
                    <tr>
                        <td>{{ $tweet->user->name }}</td>
                        <td>{{ $tweet->content }}</td>
                    </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>Usuário</th>
                        <th>Tweet</th>
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