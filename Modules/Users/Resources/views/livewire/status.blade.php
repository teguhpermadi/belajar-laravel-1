<div>
    <div class="custom-control custom-switch" wire:poll>
        <input type="checkbox" class="custom-control-input" id="status{{ $user->id }}" @if ($user->status == 'active')
            checked
        @endif wire:click="change('{{ $user->id }}', '{{ ($user->status != 'active') ? "active" : "inactive" }}')">
        <label class="custom-control-label" for="status{{ $user->id }}">{{ $user->status }}</label>
      </div>
</div>
