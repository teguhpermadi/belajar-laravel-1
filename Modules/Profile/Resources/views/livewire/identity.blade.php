<div>
    {{-- livewire view --}}
    <form wire:submit.prevent="update">
        <div class="card">
            <div class="card-header">
                Identitas
            </div>
            <div class="card-body">
                <div class="row form-group">
                    <div class="col-md-3">
                        Nama Lengkap
                    </div>
                    <div class="col-md-9">
                        <input type="text" wire:model="name" class="bg-gray-200 appearance-none border-2 {{ ($errors->has('name')) ? 'border-red-500' : 'border-gray-200' }} rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
                        @error('name') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-3">
                        Username
                    </div>
                    <div class="col-md-9">
                        <input type="text" wire:model="username" class="bg-gray-200 appearance-none border-2 {{ ($errors->has('username')) ? 'border-red-500' : 'border-gray-200' }} rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
                        @error('username') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-3">
                        Email
                    </div>
                    <div class="col-md-9">
                        <input type="text" wire:model="email" class="bg-gray-200 appearance-none border-2 {{ ($errors->has('email')) ? 'border-red-500' : 'border-gray-200' }} rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
                        @error('email') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-3">
                        Phone
                    </div>
                    <div class="col-md-9">
                        <input type="text" wire:model="phone" class="bg-gray-200 appearance-none border-2 {{ ($errors->has('phone')) ? 'border-red-500' : 'border-gray-200' }} rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
                        @error('phone') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
</div>
