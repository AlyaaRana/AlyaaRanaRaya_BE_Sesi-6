<!DOCTYPE html>
<html>
<head>
    <title>Klinik BNCC</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-10 bg-gray-100">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Data Pasien Klinik</h1>
        <a href="{{ route('patients.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Pasien Baru</a>

        @foreach($patients as $patient)
            <div class="mt-6 border p-4 rounded bg-gray-50">
                <h2 class="text-xl font-bold">{{ $patient->name }}</h2>
                <p class="text-sm text-gray-600">
                    BPJS: {{ $patient->patientDetail->bpjs_number ?? '-' }} |
                    Lahir: {{ $patient->patientDetail->birth_date ?? '-' }} |
                    Alamat: {{ $patient->patientDetail->address ?? '-' }}
                </p>

                <div class="mt-3">
                    <h3 class="font-semibold">Rekam Medis:</h3>
                    <ul class="list-disc ml-5 mb-3">
                        @forelse($patient->medicalRecords as $record)
                            <li>
                                <b>{{ $record->visit_date }}</b>: {{ $record->diagnosis }} - {{ $record->treatment }}
                            </li>
                        @empty
                            <li class="text-gray-400">Belum ada rekam medis.</li>
                        @endforelse
                    </ul>
                </div>

                <form action="{{ route('records.store', $patient->id) }}" method="POST" class="mt-4 border-t pt-2">
                    @csrf
                    <p class="text-sm font-bold mb-2">Tambah Rekam Medis:</p>
                    <div class="flex gap-2">
                        <input type="text" name="diagnosis" placeholder="Diagnosis" class="border p-1 rounded w-1/3" required>
                        <input type="text" name="treatment" placeholder="Pengobatan" class="border p-1 rounded w-1/3" required>
                        <input type="date" name="visit_date" class="border p-1 rounded" required>
                        <button type="submit" class="bg-green-500 text-white px-3 py-1 rounded">Simpan</button>
                    </div>
                </form>
            </div>
        @endforeach
    </div>
</body>
</html>
