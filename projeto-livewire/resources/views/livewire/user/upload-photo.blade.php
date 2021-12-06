<div class="p-3">
    <h1>Atualizar Foto de Perfil</h1>
    <div>@error('photo') {{$message}} @enderror</div>
    <form action="" method="post" wire:submit.prevent="storagePhoto">
        <input type="file" wire:model="photo">
        <hr>
        <button type="submit">Atualizar Foto</button>
    </form>
</div>
