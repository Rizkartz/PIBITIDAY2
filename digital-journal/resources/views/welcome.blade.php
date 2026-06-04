<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Journal</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = { darkMode: 'class' }
    </script>
</head>
<body class="bg-gray-100 text-gray-800 dark:bg-gray-900 dark:text-gray-100 transition-colors duration-300 min-h-screen p-8">

    <div class="max-w-3xl mx-auto">
        <header class="flex justify-between items-center mb-10 bg-white dark:bg-gray-800 p-5 rounded-xl shadow-sm">
            <h1 class="text-2xl font-bold">📚 My Journal</h1>
            
            <button id="darkModeToggle" class="bg-gray-600 hover:bg-gray-700 dark:bg-yellow-500 dark:hover:bg-yellow-600 dark:text-gray-900 text-white font-semibold px-4 py-2 rounded-lg transition-colors">
            </button>
        </header>

            <main>
            <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-sm mb-6">
                <h2 class="text-xl font-bold mb-4">Buat Postingan Baru</h2>
                
                <form action="/upload" method="POST" enctype="multipart/form-data">
                    @csrf <label class="block mb-2 font-medium">Judul</label>
                    <input type="text" name="title" class="w-full border border-gray-300 dark:border-gray-600 dark:bg-gray-700 rounded-lg p-2 mb-4 focus:outline-none" placeholder="Masukkan judul..." required>

                    <label class="block mb-2 font-medium">Tipe Tugas</label>
                    <select name="type" class="w-full border border-gray-300 dark:border-gray-600 dark:bg-gray-700 rounded-lg p-2 mb-4 focus:outline-none">
                        <option value="note">Catatan (Note)</option>
                        <option value="photo">Foto</option>
                        <option value="video">Video</option>
                    </select>

                    <label class="block mb-2 font-medium">Unggah File (Opsional)</label>
                    <input type="file" name="file" class="w-full border border-gray-300 dark:border-gray-600 dark:bg-gray-700 rounded-lg p-2 mb-6 focus:outline-none">

                    <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg w-full font-bold">Simpan ke Jurnal</button>
                </form>
            </div>
        </main>
    </div>

    <script>
        const htmlElement = document.documentElement;
        const toggleBtn = document.getElementById('darkModeToggle');

        // Mengecek apakah sebelumnya ada preferensi dark mode di browser
        if (localStorage.getItem('theme') === 'dark') {
            htmlElement.classList.add('dark');
        }

        // Aksi ketika tombol ditekan
        toggleBtn.addEventListener('click', () => {
            htmlElement.classList.toggle('dark');

            // Menyimpan pilihan ke localStorage
            if (htmlElement.classList.contains('dark')) {
                localStorage.setItem('theme', 'dark');
            } else {
                localStorage.setItem('theme', 'light');
            }
        });
    </script>
</body>
</html>