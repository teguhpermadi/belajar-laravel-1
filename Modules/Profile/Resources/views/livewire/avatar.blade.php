<div>

    {{-- livewire view --}}
    <div class="card">
        <div class="card-header">
            Avatar
        </div>
        <img src="{{ asset('storage/'.$user->avatar) }}" wire:poll>
        <form wire:submit.prevent="upload">
            <div class="card-body">
                <input type="file" wire:model="avatar" name="avatar" accept="image/png, image/jpeg" id="{{ $iteration }}">
                @error('avatar') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>
        </form>
    </div>
</div>
