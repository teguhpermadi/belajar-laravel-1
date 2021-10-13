<div>
    {{-- livewire view --}}
    <form wire:submit.prevent="update">
        <div class="card">
            <div class="card-header">
                Change Password
            </div>
            <div class="card-body">
                    <div class="row form-group pr-3 pl-3">
                        <input type="password" wire:model="old" class="bg-gray-200 appearance-none border-2 {{ ($errors->has('old')) ? 'border-red-500' : 'border-gray-200' }} rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" placeholder="old password" name="old">
                        @error('old') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                    </div>
                    <div class="row form-group pr-3 pl-3">
                        <input type="password" wire:model="new" class="bg-gray-200 appearance-none border-2 {{ ($errors->has('new')) ? 'border-red-500' : 'border-gray-200' }} rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" placeholder="new password" name="new">
                        @error('new') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                    </div>
                    <div class="row form-group pr-3 pl-3">
                        <input type="password" wire:model="confirm" class="bg-gray-200 appearance-none border-2 {{ ($errors->has('confirm')) ? 'border-red-500' : 'border-gray-200' }} rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" placeholder="confirm password" name="confirm">
                        @error('confirm') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                    </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
</div>
