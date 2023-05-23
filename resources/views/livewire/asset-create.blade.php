
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         {{ __('Create Asset') }}
    </h2>
</x-slot>

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                          <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                            <div class="card-body">                     
                                @if (session('success'))
                                  <div class="alert alert-success">
                                  {{ session('success') }}
                                  </div>
                                @endif
                              </div> 
                                <!-- Brand -->
                                <div class="col-span-6 sm:col-span-4">
                                  <x-label for="brand" value="{{ __('Brand') }}" />
                                  <x-input wire:model.defer="brand" id="brand" name="brand" type="text" class="mt-1 block w-full"/>
                                  <x-input-error for="brand" class="mt-2" />
                                </div>

                                 <!-- Model -->
                                 <div class="col-span-6 sm:col-span-4">
                                  <x-label for="model" value="{{ __('Model') }}" />
                                  <x-input wire:model.defer="model" id="model" name="model" type="text" class="mt-1 block w-full"/>
                                  <x-input-error for="model" class="mt-2" />
                                </div>
                                <!-- Type_id -->
                                <div class="col-span-6 sm:col-span-4 rounded-md">
                                  <x-label for="select-option" value="{{ __('Select Type') }}" />
                                    <select wire:model.defer="type_id" id="type_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="">-- Select type --</option>
                                        @foreach ($options as $option)
                                            <option value="{{ $option->id }}">{{ $option->type }}</option>
                                        @endforeach
                                    </select>
                                    <x-input-error for="select-option" class="mt-2" />
                                </div> 
                                  <x-button wire:click="AddAsset" class="mt-4">
                                  {{ __('Submit') }}
                                </x-button>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
