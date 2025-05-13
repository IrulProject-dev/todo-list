<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            🗓️ {{ __('Tugas Hari Ini') }} ({{ $today }})
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- Statistik Task --}}
                    <div class="mb-4">
                        <h4 class="text-lg font-semibold">Statistik Task Hari Ini</h4>
                        <p>Total Task: <strong>{{ $totalTasks }}</strong></p>
                        <p>Task Selesai: <strong>{{ $completedTasks }}</strong></p>
                        <p>Persentase Selesai: <strong>{{ $completionRate }}%</strong></p>
                    </div>

                    {{-- Form Tambah Task --}}
                    <form action="{{ route('tasks.store') }}" method="POST" class="mb-4">
                        @csrf
                        <div class="input-group">
                            <input type="text" name="title" class="form-control bg-white text-dark" placeholder="Tambah task baru" required>
                            <button class="btn btn-primary">Tambah</button>
                        </div>
                    </form>

                    {{-- Daftar Task --}}
                    @forelse($tasks as $task)
                    <div class="card mb-2">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <span>
                                {{ $task->title }}
                            </span>

                            {{-- Form Checkbox --}}
                            <form action="{{ route('tasks.complete', $task->id) }}" method="POST" id="form-{{ $task->id }}">
                                @csrf
                                <input
                                    type="checkbox"
                                    name="is_completed"
                                    onchange="document.getElementById('form-{{ $task->id }}').submit()"
                                    {{ $task->completed ? 'checked' : '' }}>
                                {{ $task->completed ? '✅ Selesai' : '' }}
                            </form>
                        </div>
                    </div>
                    @empty
                    <p>Belum ada task. Tambahkan satu di atas.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
