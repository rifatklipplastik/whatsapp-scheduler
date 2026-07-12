<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">
            Events
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if(session('success'))
                <div class="mb-4 rounded bg-green-100 p-4 text-green-700">
                    {{ session('success') }}
                </div>
            @endif

            <a href="{{ route('events.create') }}"
               class="bg-blue-600 text-white px-4 py-2 rounded">
                + New Event
            </a>

            <table class="w-full mt-6 border">
                <thead>
                    <tr class="bg-gray-100 dark:bg-gray-800">
                        <th class="p-3 text-left">Title</th>
                        <th class="p-3 text-left">Start</th>
                        <th class="p-3 text-left">Status</th>
                    </tr>
                </thead>

                <tbody>

                @forelse($events as $event)

                    <tr class="border-t">

                        <td class="p-3">
                            {{ $event->title }}
                        </td>

                        <td class="p-3">
                            {{ $event->start_time->format('d M Y H:i') }}
                        </td>

                        <td class="p-3">
                            {{ ucfirst($event->status) }}
                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="3" class="p-4 text-center">
                            No events yet.
                        </td>
                    </tr>

                @endforelse

                </tbody>
            </table>

        </div>
    </div>

</x-app-layout>