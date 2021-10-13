<div>

    {{-- livewire view --}}
    <div class="card">
        <div class="card-header">
            Avatar
        </div>
        <div class="d-flex flex-column align-items-center text-center mt-3">
            <img src="{{ asset('storage/'.$user->avatar) }}" wire:poll class="rounded-circle" width="150">
        </div>
        <form wire:submit.prevent="upload">
            <div class="card-body">
                <input type="file" wire:model="avatar" name="avatar" accept="image/png, image/jpeg" id="{{ $iteration }}">
                @error('avatar') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>
        </form>
    </div>
</div>
