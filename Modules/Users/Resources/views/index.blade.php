<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {!! config('users.name') !!}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row mt-3">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th colspan="2">Nama</th>
                                <th>Status</th>
                                <th>Username</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        @foreach ($users as $user)
                            <tr>
                                <td><img src="{{ (is_null($user->avatar)) ? Avatar::create($user->name)->toBase64() : asset('storage/'.$user->avatar)}}"
                                    alt="" class="rounded-circle h-9"></td>
                                <td><a href="{{ route('profile.show', ['uuid' => $user->uuid]) }}" class="text-primary">{{ $user->name }}</a></td>
                                <td>{{ $user->is_active }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <button class="btn btn-sm btn-warning">edit</button>
                                    @if ($user->is_active == 'yes')
                                    <button class="btn btn-sm btn-danger">non aktif</button>
                                    @else
                                    <button class="btn btn-sm btn-primary">aktif</button>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
