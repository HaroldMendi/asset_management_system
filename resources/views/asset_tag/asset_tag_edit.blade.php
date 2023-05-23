<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Asset Tag') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
            @foreach($asset as $assets)
            <x-label for="title" value="{{ $assets->brand }}" />
            <x-label for="title" value="{{ $assets->model }}" />
            <x-label for="title" value="{{ $assets->type->type }}" />
            @endforeach
            </div>
        </div>
    </div>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                          <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                              <form action="{{ route( 'asset-tag.update', $asset_tag[0]->id ) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="PUT">
				                <input type="hidden" name="id" value="{{ $asset_tag[0]->id }}">
                                <!-- Serial Number -->
                                <div class="col-span-6 sm:col-span-4">
                                  <x-label for="title" value="{{ __('Serial Number') }}" />
                                  <x-input id="serial_number" name="serial_number" type="text" value="{{ $asset_tag[0]->serial_number }}" class="mt-1 block w-full"/>
                                  <x-input-error for="serial_number" class="mt-2" />
                                </div>

                                 <!-- Asset Tag Number -->
                                 <div class="col-span-6 sm:col-span-4">
                                  <x-label for="model" value="{{ __('Asset Tag Number') }}" />
                                  <x-input id="asset_tag_number" name="asset_tag_number" type="text" value="{{ $asset_tag[0]->asset_tag_number }}" class="mt-1 block w-full"/>
                                  <x-input-error for="asset_tag_number" class="mt-2" />
                                </div>

                                <!-- Other Information -->
                                <div class="col-span-6 sm:col-span-4">
                                  <x-label for="model" value="{{ __('Other Information') }}" />
                                  <x-input id="other_information" name="other_information" type="text" value="{{ $asset_tag[0]->other_information }}" class="mt-1 block w-full"/>
                                  <x-input-error for="other_information" class="mt-2" />
                                </div>
                                 
                                 <!-- Purchase Price -->
                                 <div class="col-span-6 sm:col-span-4">
                                  <x-label for="model" value="{{ __('Purchase Price') }}" />
                                  <x-input id="purchase_price" name="purchase_price" type="text" value="{{ $asset_tag[0]->purchase_price }}" class="mt-1 block w-full"/>
                                  <x-input-error for="purchase_price" class="mt-2" />
                                </div>
                                
                                <x-button class="mt-4">
                                  {{ __('Submit') }}
                                </x-button>
                              </form>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            
</x-app-layout>