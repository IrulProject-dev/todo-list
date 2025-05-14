<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('User Details') }}
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-8">
            <div class="p-6 bg-white border-b border-gray-200">
                <h1 class="text-2xl font-bold text-gray-800 mb-6">👤 User Profile</h1>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Nama Lengkap</p>
                        <p class="mt-1 text-sm text-gray-900">{{ $user->name }}</p>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-500">Email</p>
                        <p class="mt-1 text-sm text-gray-900">{{ $user->email }}</p>
                    </div>
                </div>

                @if ($user->tasks && $user->tasks->isNotEmpty())
                <div>
                    <p class="text-sm font-medium text-gray-500">Bergabung Pada</p>
                    <p class="mt-1 text-sm text-gray-900">
                        {{ $user->tasks->first()->created_at->translatedFormat('l, d F Y') }}
                    </p>
                </div>
                @endif
            </div>
        </div>

        <h2 class="text-2xl font-bold text-gray-800 mb-6">📋 Task History</h2>

        @if ($user->tasks->isEmpty())
        <div class="text-center py-10 bg-white rounded-lg shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
            </svg>
            <p class="mt-3 text-gray-500">User ini belum memiliki task.</p>
        </div>
        @else
            @foreach ($user->tasks->groupBy(function($item) { return $item->created_at->format('Y-m-d'); }) as $date => $tasks)
            <div class="relative pl-6 border-l-4 border-blue-500 mb-10">
                <div class="absolute left-[-10px] top-1.5 w-4 h-4 bg-blue-500 border-4 border-white rounded-full"></div>
                <h3 class="text-blue-600 font-semibold text-lg mb-2">
                    {{ \Carbon\Carbon::parse($date)->translatedFormat('l, d M Y') }}
                </h3>

                <ul class="space-y-2 ml-4">
                    @foreach ($tasks as $task)
                    <li class="flex items-center justify-between bg-white border border-gray-200 rounded-lg p-3 shadow-sm hover:bg-gray-50 transition">
                        <div class="flex items-center">
                            @if ($task->completed == 1)
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            @else
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                            </svg>
                            @endif
                            <div>
                                <span class="text-gray-700 font-medium">{{ $task->title }}</span>
                                @if($task->description)
                                <p class="text-sm text-gray-500 mt-1">{{ $task->description }}</p>
                                @endif
                            </div>
                        </div>
                        <span class="text-sm font-medium px-2.5 py-0.5 rounded-full
                              {{ $task->completed ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                            {{ $task->completed ? 'Completed' : 'Pending' }}
                        </span>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        @endif

        <div class="mt-8">
            <a href="{{ route('users.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Back to Users List
            </a>
        </div>
    </div>
</x-app-layout>
