<section>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <div class="flex justify-between items-center pb-4 bg-white dark:bg-gray-900">
                <!-- logo -->
        </div>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-900 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Level
                </th>
                <th scope="col" class="py-3 px-6">
                    Killed By
                </th>
            </tr>
            </thead>
            <tbody>
                @foreach($kills as $kill)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 dark:bg-gray-900 dark:hover:bg-gray-600">
                        <th scope="row" class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                            <img class="w-10 h-10 rounded-full" src="1">
                            <div class="pl-3">
                                <div class="text-base font-semibold">{{ $kill->killed_by }}</div>
                                <div class="font-normal text-gray-500 inline-flex">
                                    @if($kill->killed_online)
                                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2 self-center"></div>
                                        <div>Online</div>
                                    @else
                                        <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2 self-center"></div>
                                        <div>Offline</div>
                                    @endif
                                </div>
                            </div>
                        </th>
                        <td class="py-4 px-6">
                            {{ $kill['level'] }}
                        </td>
                        <td class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                            <img class="w-10 h-10 rounded-full" src="1">
                            <div class="pl-3">
                                <div class="text-base font-semibold">{{ $kill->killed_by }}</div>
                                <div class="font-normal text-gray-500 inline-flex">
                                    @if($kill->killed_online)
                                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2 self-center"></div>
                                        <div>Online</div>
                                    @else
                                        <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2 self-center"></div>
                                        <div>Offline</div>
                                    @endif
                                </div>
                            </div>
                        </td>
                    </tr> <!-- Primeiro -->
                @endforeach
            </tbody>
        </table>
        {{ $kills->links('livewire.custom-pagination-links-view') }}
    </div>
</section>
