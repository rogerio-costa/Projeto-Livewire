<div class="container-fluid p-3">

    <div class="card mb-3">
        <div class="card-header">
            Componente Livewire
        </div>
        <div class="card-body">
            <h5 class="card-title"> {{ $greeting }} {{ $name }} @if ($loud) ! @endif </h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

            <div class="form-row mb-3">
                <div class="col">
                    <label>Seu nome</label>
                    <input wire:model="name" type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col">
                    <label>Selecione uma opção</label>
                    <select wire:model="greeting" class="form-control">
                        <option>Hello</option>
                        <option>Goodbye</option>
                        <option>Adios</option>
                    </select>
                </div>
            </div>

            <div class="form-row mb-3">
                <div class="col">
                    <input wire:model="loud" type="checkbox">
                </div>
            </div>

            <div class="form-row mb-3">
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>

        </div>
    </div>

</div>