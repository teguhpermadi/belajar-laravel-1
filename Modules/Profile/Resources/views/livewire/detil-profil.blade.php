@push('header-livewire')
<script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />

@endpush
<div>


    {{-- Jika data yang ditampilkan adalah BUKAN data miliknya --}}
    @if (Auth::id() != $id_)
    {{-- jika datanya kosong --}}
    @if (is_null($profil))
    <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
        <div class="card-header">Infomarsi</div>
        <div class="card-body">
            Pengguna belum mengisi informasi
        </div>
    </div>
    @endif

    {{-- jika datanya ada --}}
    @if ($profil)
    <div class="card">
        <div class="card-header">
            Informasi
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">
                    <input type="text" wire:model="nik"
                        class="bg-gray-200 appearance-none border-2 {{ ($errors->has('nik')) ? 'border-red-500' : 'border-gray-200' }} rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                        placeholder="nik">
                    @error('nik') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-6">
                    <select class="form-select block w-full mt-1" wire:model="jenis_kelamin">
                        <option>Jenis Kelamin</option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                    @error('jenis_kelamin') <span class="text-red-500 text-xs italic">{{ $message }}</span>
                    @enderror

                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <input type="text" wire:model="alamat"
                        class="bg-gray-200 appearance-none border-2 {{ ($errors->has('alamat')) ? 'border-red-500' : 'border-gray-200' }} rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                        placeholder="alamat">
                    @error('alamat') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                </div>
                <div class="col-md-6">
                    <input type="text" wire:model="tempat_lahir"
                        class="bg-gray-200 appearance-none border-2 {{ ($errors->has('tempat_lahir')) ? 'border-red-500' : 'border-gray-200' }} rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                        placeholder="tempat_lahir">
                    @error('tempat_lahir') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    {{-- datepicker --}}
                    <input type='text'
                        class="bg-gray-200 appearance-none border-2 {{ ($errors->has('tanggal_lahir')) ? 'border-red-500' : 'border-gray-200' }} rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                        id='datepicker' wire:model="tanggal_lahir" placeholder="tanggal lahir">
                    @error('tanggal_lahir') <span class="text-red-500 text-xs italic">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <select class="form-select block w-full mt-1" wire:model="provinsi">
                        <option>provinsi</option>
                    </select>
                    @error('provinsi') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">

                    <select class="form-select block w-full mt-1" wire:model="distrik">
                        <option>disktrik</option>
                    </select>

                    @error('disktri') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                </div>
                <div class="col-md-6">

                    <select class="form-select block w-full mt-1" wire:model="kecamatan">
                        <option>kecamatan</option>
                    </select>

                    @error('kecamatan') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">

                    <select class="form-select block w-full mt-1" wire:model="kelurahan">
                        <option>kelurahan</option>
                    </select>

                    @error('kelurahan') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                </div>
                <div class="col-md-6">
                    <input type="text" wire:model="kodepos"
                        class="bg-gray-200 appearance-none border-2 {{ ($errors->has('kodepos')) ? 'border-red-500' : 'border-gray-200' }} rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                        placeholder="kodepos">
                    @error('kodepos') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id='map' style='height: 500px;'></div>
                </div>
            </div>
        </div>
    </div>

    @endif
    @endif
    {{-- Jika data yang ditampilkan adalah data miliknya --}}
    @if (Auth::id() == $id_)
    <form wire:submit.prevent="update">
        <div class="card">
            <div class="card-header">
                Informasi
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <input type="text" wire:model="nik"
                            class="bg-gray-200 appearance-none border-2 {{ ($errors->has('nik')) ? 'border-red-500' : 'border-gray-200' }} rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                            placeholder="nik">
                        @error('nik') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-6">
                        <select class="form-select block w-full mt-1" wire:model="jenis_kelamin">
                            <option>Jenis Kelamin</option>
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                        @error('jenis_kelamin') <span class="text-red-500 text-xs italic">{{ $message }}</span>
                        @enderror

                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <input type="text" wire:model="alamat"
                            class="bg-gray-200 appearance-none border-2 {{ ($errors->has('alamat')) ? 'border-red-500' : 'border-gray-200' }} rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                            placeholder="alamat">
                        @error('alamat') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                    </div>
                    <div class="col-md-6">
                        <input type="text" wire:model="tempat_lahir"
                            class="bg-gray-200 appearance-none border-2 {{ ($errors->has('tempat_lahir')) ? 'border-red-500' : 'border-gray-200' }} rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                            placeholder="tempat_lahir">
                        @error('tempat_lahir') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        {{-- datepicker --}}
                        <input type='text'
                            class="bg-gray-200 appearance-none border-2 {{ ($errors->has('tanggal_lahir')) ? 'border-red-500' : 'border-gray-200' }} rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                            id='datepicker' wire:model="tanggal_lahir" placeholder="tanggal lahir">
                        @error('tanggal_lahir') <span class="text-red-500 text-xs italic">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <select class="form-select block w-full mt-1" wire:model="provinsi">
                            <option>provinsi</option>
                        </select>
                        @error('provinsi') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">

                        <select class="form-select block w-full mt-1" wire:model="distrik">
                            <option>disktrik</option>
                        </select>

                        @error('disktri') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                    </div>
                    <div class="col-md-6">

                        <select class="form-select block w-full mt-1" wire:model="kecamatan">
                            <option>kecamatan</option>
                        </select>

                        @error('kecamatan') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">

                        <select class="form-select block w-full mt-1" wire:model="kelurahan">
                            <option>kelurahan</option>
                        </select>

                        @error('kelurahan') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                    </div>
                    <div class="col-md-6">
                        <input type="text" wire:model="kodepos"
                            class="bg-gray-200 appearance-none border-2 {{ ($errors->has('kodepos')) ? 'border-red-500' : 'border-gray-200' }} rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                            placeholder="kodepos">
                        @error('kodepos') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id='map' style='height: 500px;'></div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
    @endif

</div>

@push('footer-livewire')
<script>
    mapboxgl.accessToken =
        'pk.eyJ1IjoidGVndWhwZXJtYWRpIiwiYSI6ImNrdHlmdjhrdzB0enIydXRodTNrMmsweWsifQ.qDYxEaljnRN5URnTUZcDjQ';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11'
    });

</script>
<!-- Datepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"
    integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css"
    integrity="sha512-Fppbdpv9QhevzDE+UHmdxL4HoW8HantO+rC8oQB2hCofV+dWV2hePnP5SgiWR1Y1vbJeYONZfzQc5iII6sID2Q=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<script type="text/javascript">
    $(document).ready(function () {
        $('#datepicker').datepicker();
    });

    ('#datepicker').datepicker({
        dateFormat: 'dd-mm-yy',
    });

    $('#datepicker').on('change', function (e) {
        @this.set('tanggal_lahir', e.target.value);
    });

</script>
@endpush
