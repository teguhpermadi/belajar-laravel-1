<div>

    {{-- livewire view --}}
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center">
                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="avatar" width="150">
                <form wire:submit.prevent="changeAvatar">
                    <input type="file" wire:model="avatar">
                    @error('name') <span class="error">{{ $message }}</span> @enderror
                    <button type="submit">Save Contact</button>
                </form>
                <div class="mt-3">
                    <h4>Tes</h4>
                    <p class="text-secondary mb-1">Full Stack Developer</p>
                    <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>

                </div>
            </div>
        </div>
    </div>
</div>
