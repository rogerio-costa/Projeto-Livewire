<div class="card mb-3">
    <div class="card-header">
        Hi {{ $name }}: {{ now() }}
    </div>
    <div class="card-body">
        <h5 class="card-title"> Hi </h5>
        <p class="card-text"> Olá </p>

        <div class="form-row mb-3">
            <div class="col">
                <button wire:click="$refresh" type="button" class="btn btn-primary">Refresh</button>
                <button wire:click="emitFoo" type="button" class="btn btn-primary">EmitFoo</button>
            </div>
        </div>

    </div>
</div>