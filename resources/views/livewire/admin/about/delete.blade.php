<x-jet-dialog-modal wire:model="modalConfirmDeleteVisible">
    <x-slot name="title">
        {{ __('Delete ') }}
    </x-slot>

    <x-slot name="content">
        {{ __('Delete About Id: ') }}{{ $modelId }}

        @if ($img)
            Photo Preview:
            <img src="{{ asset('storage/' . $img) }}" class="w-50">
        @endif

    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('modalConfirmDeleteVisible')" wire:loading.attr="disabled">
            {{ __('Nevermind') }}
        </x-jet-secondary-button>

        <x-jet-danger-button class="ml-2" wire:click="delete" wire:loading.attr="disabled">
            {{ __('Delete About') }}
        </x-jet-danger-button>
    </x-slot>
</x-jet-dialog-modal>
