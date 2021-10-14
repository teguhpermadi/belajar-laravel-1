<div>
    {{-- livewire view --}}
    <form wire:submit.prevent="update">
    <div class="card">
        <div class="card-header">
            Informasi
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" wire:model="nik" class="bg-gray-200 appearance-none border-2 {{ ($errors->has('nik')) ? 'border-red-500' : 'border-gray-200' }} rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" placeholder="nik">
                        @error('nik') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-6">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis, sit?
        
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis, sit?
        
                </div>
                <div class="col-md-6">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis, sit?
        
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary">Update</button>
        </div>
    </div>
</form>
</div>
