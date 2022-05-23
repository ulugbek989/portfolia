<x-jet-dialog-modal wire:model="modalFormVisible">
    <x-slot name="title">
        {{ __('Save Page') }}
    </x-slot>

    <x-slot name="content">
        <div class="container">
            <div class="row">
                <div class="mt-2 col-md-6">
                    <x-jet-label for="title" value="{{ __('Title ') }}" />
                    <x-jet-input id="title" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="title" />
                    <div class="text-gray-400">
                        @error('title')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mt-2 col-md-6">

                    <x-jet-label for="percent" value="{{ __('Percent') }}" />
                    <x-jet-input id="percent" class="block mt-1 w-full" type="number"
                        wire:model.debounce.800ms="percent" />
                    <div class="text-gray-400">
                        @error('percent')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mt-2 col-md-6">

                    <x-jet-label for="sort" value="{{ __('Sort') }}" />
                    <select wire:model="sort" name="sort">
                        <option value="">select</option>
                        <option value="frontend">Frontend</option>
                        <option value="backend">Backend</option>
                    </select>

                    <div class="text-gray-400">
                        @error('sort')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div wire:loading class="text-gray-400">
                        Processing...
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('modalFormVisible')" wire:loading.attr="disabled">
            {{ __('Nevermind') }}
        </x-jet-secondary-button>

        @if ($modelId)
            <x-jet-button class="ml-2" wire:click="update" wire:loading.attr="disabled">
                {{ __('Update') }}
            </x-jet-button>
        @else
            <x-jet-button class="ml-2" wire:click="create" wire:loading.attr="disabled">
                {{ __('Create') }}
                </x-jet-danger-button>
        @endif

    </x-slot>
</x-jet-dialog-modal>
