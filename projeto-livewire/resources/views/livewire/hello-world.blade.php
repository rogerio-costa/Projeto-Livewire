<div class="card mb-3">
    <div class="card-header">
        Componente Livewire
    </div>
    <div class="card-body">
        <h5 class="card-title"> {{ $greeting }} {{ $name }} @if ($loud) ! @endif </h5>
        <p class="card-text">{{ $frase }}</p>

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
            <div class="col">
                <button wire:click="resetName('Bingo')" type="button" class="btn btn-primary">Reset Name</button>
            </div>
            <div class="col">
                <button wire:click="$set('name', 'Chico')" type="button" class="btn btn-primary">Reset Passando o nome Chico</button>
            </div>
            <div class="col">
                <button wire:click="$refresh" type="button" class="btn btn-primary">Refresh</button>
            </div>
        </div>

        <div class="form-row mb-3">
            <div class="col">
                <button wire:click="$emit('refreshChildren')" type="button" class="btn btn-primary">Refresh Children</button>
            </div>
        </div>

        {{ now() }}

    </div>
</div>

@foreach ($nameList as $name)
    @livewire('say-hi', ['myName' => $name])
@endforeach