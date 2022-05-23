<x-jet-dialog-modal wire:model="modalFormVisible">
    <x-slot name="title">
        {{ __('Save Page') }}
    </x-slot>

    <x-slot name="content" class="d-flex">
        <div class="container">
            <div class="row">
                <div class="mt-2 col-md-6">
                    <x-jet-label for="title_uz" value="{{ __('Title uz') }}" />
                    <x-jet-input id="title_uz" class="block mt-1 w-full" type="text"
                        wire:model.debounce.800ms="title_uz" />
                    <div class="text-gray-400">
                        @error('title_uz')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mt-2 col-md-6">

                    <x-jet-label for="title_ru" value="{{ __('Title ru') }}" />
                    <x-jet-input id="title_ru" class="block mt-1 w-full" type="text"
                        wire:model.debounce.800ms="title_ru" />
                    <div class="text-gray-400">
                        @error('title_ru')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mt-2 col-md-6">

                    <x-jet-label for="text_uz" value="{{ __('Text uz') }}" />
                    <textarea id="text_uz"  rows="5" class="block mt-1 w-full" type="text"
                        wire:model.debounce.800ms="text_uz" ></textarea>
                    <div class="text-gray-400">
                        @error('text_uz')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mt-2 col-md-6">

                    <x-jet-label for="text_ru" value="{{ __('Text ru') }}" />
                    <textarea id="text_ru"  rows="5" class="block mt-1 w-full" type="text"
                        wire:model.debounce.800ms="text_ru" ></textarea>
                    <div class="text-gray-400">
                        @error('text_ru')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mt-2 col-md-6">

                    <x-jet-label for="img" value="{{ __('Img') }}" />
                    <div wire:loading class="text-gray-400">
                        Processing...
                    </div>
                    @if (!$modelId)
                        @if ($img)
                            Photo Preview:
                            <img src="{{ $img->temporaryUrl() }}" class="w-50">
                        @endif
                    @else
                        @if ($img)
                            Photo Preview:
                            <img src="{{ asset('storage/' . $img) }}" class="w-50">
                        @endif

                    @endif
                    <x-jet-input type="file" class="block mt-1 w-full" wire:model.debounce.800ms="img" />
                    <div class="text-gray-400">
                        @error('img')
                            <span class="error">{{ $message }}</span>
                        @enderror
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
