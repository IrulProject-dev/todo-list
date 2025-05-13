<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">📊 Riwayat Task Harian</h2>

        @forelse ($progress as $date => $tasks)
        <div class="relative pl-6 border-l-4 border-blue-500 mb-10">
            <div class="absolute left-[-10px] top-1.5 w-4 h-4 bg-blue-500 border-4 border-white rounded-full"></div>
            <h3 class="text-blue-600 font-semibold text-lg mb-2">
                {{ \Carbon\Carbon::parse($date)->translatedFormat('l, d M Y') }}
            </h3>

            <ul class="space-y-2 ml-4">
                @foreach ($tasks as $progressItem)
                <li class="flex items-center justify-between bg-white border border-gray-200 rounded-lg p-3 shadow-sm">
                    <span class="text-gray-700">{{ $progressItem->title }}</span>
                    @if ($progressItem->completed == 1)
                    <span class="text-gray-500 text-sm font-medium bg-gray-100 px-2 py-0.5 rounded-full">
                        Selesai
                    </span>
                    @else
                    <span class="text-gray-500 text-sm font-medium bg-gray-100 px-2 py-0.5 rounded-full">
                        belum selesai
                    </span>
                    @endif
                </li>
                @endforeach
            </ul>
        </div>
        @empty
        <div class="text-center text-gray-500 mt-10">
            Belum ada riwayat task harian.
        </div>
        @endforelse

</x-app-layout>
