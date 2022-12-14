<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <br>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <x-table>
            <div class="px-6 py-4 flex items-center">
                <x-jet-input class="flex-1 mr-3" type="text" wire:model="search" placeholder="Buscar..." />
                @livewire('create-post')
            </div>
            @if ($posts->count() > 0)
                <table class="min-w-max w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="cursor-pointer py-3 px-6 " width="7%" wire:click="order('id')">
                                ID
                                <div style="float: right;">
                                    @if ($sort == 'id')
                                        @if ($direction == 'asc')
                                            <i class="fa fa-sort-up "></i>
                                        @else
                                            <i class="fa fa-sort-down"></i>
                                        @endif
                                    @else
                                        <i class="fa fa-sort"></i>
                                    @endif
                                </div>
                            </th>
                            <th class="cursor-pointer py-3 px-6 text-left" wire:click="order('title')">
                                Title
                                <div style="float: right;">
                                    @if ($sort == 'title')
                                        @if ($direction == 'asc')
                                            <i class="fa fa-sort-up float-right"></i>
                                        @else
                                            <i class="fa fa-sort-down float-right"></i>
                                        @endif
                                    @else
                                        <i class="fa fa-sort float-right"></i>
                                    @endif
                                </div>
                            </th>
                            <th class="cursor-pointer py-3 px-6 text-left" wire:click="order('content')">
                                Content
                                <div style="float: right;">
                                    @if ($sort == 'content')
                                        @if ($direction == 'asc')
                                            <i class="fa fa-sort-up float-right"></i>
                                        @else
                                            <i class="fa fa-sort-down float-right"></i>
                                        @endif
                                    @else
                                        <i class="fa fa-sort float-right"></i>
                                    @endif
                                </div>
                            </th>
                            <th class="py-3 px-6 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @foreach ($posts as $post)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="font-medium">{{ $post->id }}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span class="font-medium">{{ $post->title }}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center justify-center">
                                        <span class="font-medium">{{ $post->content }}</span>
                                    </div>
                                </td>

                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            @else
                <div class="px-6 py-4">
                    No existe ning??n registro coincidente
                </div>
            @endif

        </x-table>
    </div>
</div>
