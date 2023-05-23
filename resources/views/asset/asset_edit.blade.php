<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Asset') }}
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
                              <form action="{{ route('asset.update', $assets[0]->id) }}" method="POST">
                              
                                @csrf
                                <!-- Brand -->
                                @method('PUT')
                                <input type="hidden" name="id" id="" value="{{ $assets[0]->id }}">
                                <div class="col-span-6 sm:col-span-4">
                                  <x-label for="title" value="{{ __('Brand') }}" />
                                  <x-input id="brand" name="brand" type="text" value="{{ $assets[0]->brand }}" class="mt-1 block w-full"/>
                                  <x-input-error for="brand" class="mt-2" />
                                </div>

                                 <!-- Model -->
                                 <div class="col-span-6 sm:col-span-4">
                                  <x-label for="model" value="{{ __('Model') }}" />
                                  <x-input id="model" name="model" type="text" value="{{ $assets[0]->model }}" class="mt-1 block w-full"/>
                                  <x-input-error for="model" class="mt-2" />
                                </div>

                                <!-- Type_id -->
                                <div class="col-span-6 sm:col-span-4">
                                  <x-label for="type" value="{{ __('Select Type') }}" />
                                  <select id="type" name="type_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                  <option value="{{ $assets[0]->type_id }}">{{ $assets[0]->type->type }}</option>
                                  @foreach ($types as $type)
                                      <option value="{{ $type->id }}">{{ $type->type }}</option>
                                  @endforeach
                                </select>
                                  <x-input-error for="type" class="mt-2" />
                                </div>

                                <x-button class="mt-4">
                                  {{ __('Update') }}
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