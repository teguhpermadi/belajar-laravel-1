<div>
    {{-- livewire view --}}
    <div class="row">
        <div class="col-md-3">
            Name
        </div>
        <div class="col-md-9">
            {{ $user->name }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            Username
        </div>
        <div class="col-md-9">
            {{ $user->username }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            Phone
        </div>
        <div class="col-md-9">
            {{ $user->phone }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            Email
        </div>
        <div class="col-md-9">
            {{ $user->email }}
        </div>
    </div>
</div>
