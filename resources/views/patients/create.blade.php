<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pasien</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-10 bg-gray-100">
    <div class="max-w-lg mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-xl font-bold mb-4">Registrasi Pasien Baru</h1>
        <form action="{{ route('patients.store') }}" method="POST" class="flex flex-col gap-4">
            @csrf

            <div>
                <label class="block font-bold">Nama Lengkap</label>
                <input type="text" name="name" class="w-full border p-2 rounded" required>
            </div>

            <div class="border-t pt-4">
                <h3 class="text-gray-500 mb-2">Detail Pasien</h3>
                <div class="mb-2">
                    <label class="block text-sm">Nomor BPJS</label>
                    <input type="text" name="bpjs_number" class="w-full border p-2 rounded" required>
                </div>
                <div class="mb-2">
                    <label class="block text-sm">Tanggal Lahir</label>
                    <input type="date" name="birth_date" class="w-full border p-2 rounded" required>
                </div>
                <div class="mb-2">
                    <label class="block text-sm">Alamat Lengkap</label>
                    <textarea name="address" class="w-full border p-2 rounded" required></textarea>
                </div>
            </div>

            <button type="submit" class="bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Simpan Data</button>
            <a href="{{ route('patients.index') }}" class="text-center text-gray-500 text-sm">Kembali</a>
        </form>
    </div>
</body>
</html>
