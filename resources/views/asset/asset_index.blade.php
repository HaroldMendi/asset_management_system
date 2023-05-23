<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Asset') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                <a href="{{ route('asset-create') }}">
                    <x-button class="ml-4 mx-auto sm:px-6 lg:px-8">
                        Create Asset
                    </x-button>
                </a>
            </div>
        </div>
    </div>

    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full text-left text-sm font-light">
                            <thead
                                class="border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600">
                                <tr>
                                <th scope="col" class="px-6 py-4">Brand</th>
                                <th scope="col" class="px-6 py-4">Model</th>
                                <th scope="col" class="px-6 py-4">Type</th>
                                <th scope="col" class="px-6 py-4">Created By</th>
                                <th scope="col" class="px-6 py-4"></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($assets as $asset)
                                <tr
                                class="border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-700">
                                <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $asset->brand }}</td>
                                <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $asset->model }}</td>
                                <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $asset->type->type }}</td>
                                <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $asset->user->name }}</td>
                                <td class="whitespace-nowrap px-6 py-2 font-medium">
                                    <a class="btn" href="{{ route('asset.edit', $asset->id) }}">
                                        <x-button class="ml-4 mx-auto sm:px-4 lg:px-6">
                                            Edit
                                        </x-button>
                                    </a>
						            <a class="btn" href="{{ route('asset_tag.create', $asset->id) }}">
                                        <x-button class="ml-4 mx-auto sm:px-6 lg:px-6">
                                            Create Asset Tag
                                        </x-button>
                                    </a>
                                </td>
                                </tr>
                            @endforeach
                            </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
