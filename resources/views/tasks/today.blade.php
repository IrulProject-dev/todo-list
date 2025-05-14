<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            🗓️ {{ __('Tugas Hari Ini') }} ({{ $today }})
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Statistics Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
                        <div class="bg-blue-50 dark:bg-blue-900/30 p-4 rounded-lg border border-blue-100 dark:border-blue-900">
                            <h3 class="text-sm font-medium text-blue-800 dark:text-blue-200">Total Task</h3>
                            <p class="text-2xl font-bold text-blue-600 dark:text-blue-300">{{ $totalTasks }}</p>
                        </div>
                        <div class="bg-green-50 dark:bg-green-900/30 p-4 rounded-lg border border-green-100 dark:border-green-900">
                            <h3 class="text-sm font-medium text-green-800 dark:text-green-200">Task Selesai</h3>
                            <p class="text-2xl font-bold text-green-600 dark:text-green-300">{{ $completedTasks }}</p>
                        </div>
                        <div class="bg-purple-50 dark:bg-purple-900/30 p-4 rounded-lg border border-purple-100 dark:border-purple-900">
                            <h3 class="text-sm font-medium text-purple-800 dark:text-purple-200">Persentase</h3>
                            <p class="text-2xl font-bold text-purple-600 dark:text-purple-300">{{ $completionRate }}%</p>
                        </div>
                    </div>

                    <!-- Add Task Form -->
                    <form action="{{ route('tasks.store') }}" method="POST" class="mb-8">
                        @csrf
                        <div class="flex gap-2">
                            <input
                                type="text"
                                name="title"
                                class="flex-1 px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                                placeholder="Tambah task baru..."
                                required
                            >
                            <button
                                type="submit"
                                class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition duration-200 flex items-center gap-2"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                                </svg>
                                Tambah
                            </button>
                        </div>
                    </form>

                    <!-- Task List -->
                    <div class="space-y-3">
                        @forelse($tasks as $task)
                        <div class="flex items-center justify-between p-4 bg-white dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center space-x-4">
                                <form action="{{ route('tasks.complete', $task->id) }}" method="POST" id="form-{{ $task->id }}">
                                    @csrf
                                    <input
                                        type="checkbox"
                                        name="is_completed"
                                        onchange="document.getElementById('form-{{ $task->id }}').submit()"
                                        class="w-5 h-5 text-blue-600 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                        {{ $task->completed ? 'checked' : '' }}
                                    >
                                </form>
                                <span class="{{ $task->completed ? 'line-through text-gray-400 dark:text-gray-400' : 'text-gray-800 dark:text-gray-200' }}">
                                    {{ $task->title }}
                                </span>
                            </div>
                            @if($task->completed)
                            <span class="px-2 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-200">
                                ✅ Selesai
                            </span>
                            @endif
                        </div>
                        @empty
                        <div class="text-center py-8">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                            <p class="mt-2 text-gray-500 dark:text-gray-400">Belum ada task. Tambahkan satu di atas.</p>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
