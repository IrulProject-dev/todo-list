<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskMaster - Aplikasi TodoList Modern</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .article-img {
            transition: transform 0.5s ease;
        }
        .article-img:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body class="font-sans antialiased text-gray-800">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-4">
                    <div class="w-10 h-10 bg-indigo-600 rounded-lg flex items-center justify-center text-white">
                        <i class="fas fa-tasks text-xl"></i>
                    </div>
                    <span class="font-semibold text-gray-900 text-xl">TaskMaster</span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#features" class="text-gray-800 hover:text-indigo-600">Fitur</a>
                    <a href="#article" class="text-gray-800 hover:text-indigo-600">Artikel</a>
                    <a href="#testimonials" class="text-gray-800 hover:text-indigo-600">Testimoni</a>
                    <a href="#contact" class="text-gray-800 hover:text-indigo-600">Kontak</a>
                    <a href="/login" class="bg-indigo-600 text-white px-6 py-2 rounded-md hover:bg-indigo-700 transition">Login</a>
                </div>
                <div class="md:hidden">
                    <button class="mobile-menu-button">
                        <i class="fas fa-bars text-gray-800 text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="gradient-bg text-white">
        <div class="max-w-6xl mx-auto px-4 py-20 md:py-32">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">Kelola Tugas Anda dengan Lebih Efisien</h1>
                    <p class="text-xl mb-8 opacity-90">TaskMaster membantu Anda mengorganisir hidup dengan daftar tugas yang intuitif dan powerful.</p>
                    <div class="flex space-x-4">
                        <a href="/register" class="bg-white text-indigo-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">Mulai Gratis</a>
                        <a href="#features" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-indigo-600 transition">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="TodoList App" class="rounded-lg shadow-2xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">Fitur Unggulan TaskMaster</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Temukan bagaimana TaskMaster dapat meningkatkan produktivitas Anda sehari-hari</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="feature-card bg-white p-8 rounded-lg shadow-md transition duration-300">
                    <div class="w-14 h-14 bg-indigo-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-bell text-indigo-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Pengingat Cerdas</h3>
                    <p class="text-gray-600">Dapatkan notifikasi tepat waktu untuk tugas-tugas penting Anda, tidak ada lagi deadline yang terlewat.</p>
                </div>

                <div class="feature-card bg-white p-8 rounded-lg shadow-md transition duration-300">
                    <div class="w-14 h-14 bg-indigo-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-layer-group text-indigo-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Kategorisasi Tugas</h3>
                    <p class="text-gray-600">Kelompokkan tugas berdasarkan proyek, prioritas, atau konteks untuk manajemen yang lebih baik.</p>
                </div>

                <div class="feature-card bg-white p-8 rounded-lg shadow-md transition duration-300">
                    <div class="w-14 h-14 bg-indigo-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-mobile-alt text-indigo-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Akses Multi-Device</h3>
                    <p class="text-gray-600">Sinkronisasi sempurna antara smartphone, tablet, dan komputer Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Article Section -->
    <section id="article" class="py-20">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">Artikel Tentang Manajemen Tugas</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Pelajari teknik terbaik untuk meningkatkan produktivitas Anda</p>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="article-img overflow-hidden rounded-lg shadow-lg">
                    <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="Productivity Tips" class="w-full h-auto">
                </div>

                <div>
                    <h3 class="text-2xl font-bold mb-4">5 Alasan Mengapa TodoList Meningkatkan Produktivitas</h3>
                    <p class="text-gray-600 mb-6">Dalam dunia yang serba cepat saat ini, mengelola tugas dan tanggung jawab bisa menjadi tantangan. Aplikasi TodoList seperti TaskMaster memberikan solusi untuk tantangan ini dengan beberapa cara:</p>

                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-6 h-6 bg-indigo-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-check text-indigo-600 text-xs"></i>
                                </div>
                            </div>
                            <p class="ml-3 text-gray-700"><span class="font-semibold">Mengurangi Beban Kognitif</span> - Otak Anda tidak perlu mengingat semua tugas, sehingga bisa fokus pada eksekusi.</p>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-6 h-6 bg-indigo-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-check text-indigo-600 text-xs"></i>
                                </div>
                            </div>
                            <p class="ml-3 text-gray-700"><span class="font-semibold">Prioritasi yang Lebih Baik</span> - Dengan melihat semua tugas sekaligus, Anda bisa menentukan mana yang paling penting.</p>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-6 h-6 bg-indigo-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-check text-indigo-600 text-xs"></i>
                                </div>
                            </div>
                            <p class="ml-3 text-gray-700"><span class="font-semibold">Rasa Pencapaian</span> - Mengecek tugas yang selesai memberikan dorongan motivasi.</p>
                        </li>
                    </ul>

                    <a href="#" class="text-indigo-600 font-semibold hover:text-indigo-800">Baca artikel lengkap →</a>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center mt-20">
                <div class="order-1 md:order-2">
                    <h3 class="text-2xl font-bold mb-4">Metode Pomodoro + TodoList: Kombinasi Sempurna</h3>
                    <p class="text-gray-600 mb-6">Metode Pomodoro adalah teknik manajemen waktu yang membagi pekerjaan menjadi interval 25 menit (disebut "pomodoro") diikuti oleh istirahat singkat. Ketika dikombinasikan dengan TodoList, hasilnya sangat powerful:</p>

                    <div class="bg-indigo-50 p-6 rounded-lg mb-6">
                        <h4 class="font-semibold text-indigo-800 mb-3">Cara menggunakannya:</h4>
                        <ol class="list-decimal list-inside space-y-2 text-gray-700">
                            <li>Buat daftar tugas Anda di TaskMaster</li>
                            <li>Estimasi berapa pomodoro yang dibutuhkan untuk setiap tugas</li>
                            <li>Kerjakan tugas selama 25 menit tanpa gangguan</li>
                            <li>Istirahat 5 menit setelah setiap pomodoro</li>
                            <li>Setelah 4 pomodoro, ambil istirahat lebih panjang (15-30 menit)</li>
                        </ol>
                    </div>

                    <p class="text-gray-600">TaskMaster memiliki timer Pomodoro bawaan yang terintegrasi dengan daftar tugas Anda, membuat implementasi teknik ini menjadi sangat mudah.</p>
                </div>

                <div class="article-img overflow-hidden rounded-lg shadow-lg order-2 md:order-1">
                    <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="Pomodoro Technique" class="w-full h-auto">
                </div>
            </div>
        </div>
    </section>
    </body>
</html>

