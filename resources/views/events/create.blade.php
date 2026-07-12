<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">
            Create Event
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-3xl mx-auto">

        @if ($errors->any())
            <div class="mb-4 rounded bg-red-100 p-4">
                <ul class="list-disc pl-5 text-red-600">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            <form method="POST" action="{{ route('events.store') }}">

                @csrf

                <div class="mb-4">
                    <label>Title</label>

                    <input
                        type="text"
                        name="title"
                        value="{{ old('title') }}"
                        class="w-full border rounded">

                    @error('title')
                        <div class="text-red-600">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label>Description</label>

                    <textarea
                        name="description"
                        class="w-full border rounded">{{ old('description') }}</textarea>
                </div>

                <div class="mb-4">
                    <label>Location</label>

                    <input
                        type="text"
                        name="location"
                        value="{{ old('location') }}"
                        class="w-full border rounded">
                </div>

                <div class="mb-4">
                    <label>Phone</label>

                    <input
                        type="text"
                        name="notification_phone"
                        value="{{ old('notification_phone') }}"
                        class="w-full border rounded">
                </div>

                <div class="mb-4">
                    <label>Start Time</label>

                    <input
                        type="datetime-local"
                        name="start_time"
                        value="{{ old('start_time') }}"
                        class="w-full border rounded">
                </div>

                <div class="mb-4">
                    <label>End Time</label>

                    <input
                        type="datetime-local"
                        name="end_time"
                        value="{{ old('end_time') }}"
                        class="w-full border rounded">
                </div>

                <button
                    class="bg-blue-600 text-white px-4 py-2 rounded">
                    Save
                </button>

            </form>

        </div>
    </div>

</x-app-layout>