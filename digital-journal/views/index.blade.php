<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Journal</title>
        <script src="{{ asset('js/style.js') }}"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                darkMode: 'class',
            }
        </script>
</head>
<body class="bg-gray-100 text-gray-800 dark:bg-gray-900 dark:text-gray-100 transition-colors duration-300 min-h-screen p-8">

    <div class="max-w-3xl mx-auto">
        <header class="flex justify-between items-center mb-10 bg-white dark:bg-gray-800 p-5 rounded-xl shadow-sm">
            <h1 class="text-2xl font-bold">📚 My Journal</h1>
            
            <button id="darkModeToggle" class="bg-blue-600 hover:bg-blue-700 dark:bg-yellow-500 dark:hover:bg-yellow-600 dark:text-gray-900 text-white font-semibold px-4 py-2 rounded-lg transition-colors">
                🌙 / ☀️ Toggle Tema
            </button>
        </header>

        <main>
            <div class="bg-white dark:bg-gray-800 p-6 rounded-l shadow-sm mb-6">
                <h2 class="text-xl font-semibold mb-2">Selamat Datang di Digital Journal!</h2>
                <label class="block mb-4 font-medium">Judul</label>
                <input type="text" class="w-full border border-gray-300 dark:border-gray-600 dark:bg-gray-700 rounded-lg p-2 mb-4 focus:outline-none" placeholder="Masukkan judul...">
                <label class="block mb-4 font-medium">Konten</label>
                <select class="w-full border border-gray-300 dark:border-gray-600 dark:bg-gray-700 rounded-lg p-2 mb-4 focus:outline-none" placeholder="Masukkan konten...">
                    <option value="foto">Foto</option>
                    <option value="video">Video</option>
                    <option value="catatan">Catatan</option>
                </select>
                <button class="bg-green-600 hover:bg-green-700 dark:bg-green-500 dark:hover:bg-green-600 text-white font-semibold px-4 py-2 rounded-lg transition-colors">
                    Menyimpan
            </div>
        </main>
    </div>
</body>
</html>
        </header>
        <main>
            <div class="card">
                <h2>Upload Baru</h2>
                <p>Form untuk upload foto, video, atau catatan..</p>
            </div>
        </main>
    </div>
</body>
</html>