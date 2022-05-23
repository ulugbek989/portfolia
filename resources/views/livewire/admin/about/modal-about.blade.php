<x-jet-dialog-modal wire:model="modalFormVisible">
    <x-slot name="title">
        {{ __('Save Page') }}
    </x-slot>

    <x-slot name="content">
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
                    <textarea id="text_uz"  rows="5" name="text_uz" class="block mt-1 w-full" type="text"
                        wire:model.debounce.800ms="text_uz"></textarea>

                    <div class="text-gray-400">
                        @error('text_uz')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mt-2 col-md-6">
                    <x-jet-label for="text_ru" value="{{ __('Text ru') }}" />
                    <textarea id="text_ru"  rows="5" name="text_ru" class="block mt-1 w-full" type="text"
                        wire:model.debounce.800ms="text_ru"></textarea>
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
{{-- <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                <div class="mt-2 col-md-6">
                    <label for="title_uz" value="Title uz" >Title uz</label>
                    <input id="title_uz" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="title_uz" />
                    <div class="text-gray-400">
                        @error('title_uz')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mt-2  col-md-6">
                    <label for="title_ru" >Title ru</label>
                    <input id="title_ru" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="title_ru" />
                    <div class="text-gray-400">
                        @error('title_ru')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mt-2 col-md-6">
                    <label for="text_uz" value="{{ __('Text uz') }}" ></label>
                    <textarea id="text_uz" name="text_uz" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="text_uz" ></textarea>
                    
                    <div class="text-gray-400">
                        @error('text_uz')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mt-2 col-md-6">
                    <label for="text_ru" value="{{ __('Text ru') }}" ></label>
                    <textarea id="text_ru" name="text_ru" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="text_ru" ></textarea>
                    <div class="text-gray-400">
                        @error('text_ru')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mt-2 col-md-6">
                    <label for="img" value="{{ __('Img') }}" ></label>
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
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          @if ($modelId)
          <button class="ml-2" wire:click="update" wire:loading.attr="disabled">
              {{ __('Update') }}
          </button>
      @else
          <button class="ml-2" wire:click="create" wire:loading.attr="disabled">
              {{ __('Create') }}
              </button>
      @endif
        </div>
      </div>
    </div>
  </div> --}}
