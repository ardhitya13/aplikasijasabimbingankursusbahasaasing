<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="p-6">
    <h1 class="text-xl font-bold mb-4">Tabel Data Siswa</h1>
    <table class="min-w-full border border-gray-300">
        <thead class="bg-gray-100">
            <tr>
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Nama</th>
                <th class="border px-4 py-2">Kelas</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $siswa)
                <tr>
                    <td class="border px-4 py-2">{{ $siswa['id'] }}</td>
                    <td class="border px-4 py-2">{{ $siswa['nama'] }}</td>
                    <td class="border px-4 py-2">{{ $siswa['kelas'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
