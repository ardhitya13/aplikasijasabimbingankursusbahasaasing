<div class="ml-10 mt-20">
    @foreach ($nama as $index => $item)
        Nama Produk {{ $index + 1 }}: {{ $item }} <br>
        Deskripsi Produk {{ $index + 1 }}: {{ $desc[$index] }} <br>
        Harga Produk {{ $index + 1 }}: {{ $harga[$index] }} <br>
    @endforeach
</div>

<script src="https://cdn.tailwindcss.com"></script>

<!-- Flowbite CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

<!-- Flowbite JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<div class="ml-10 mt-20">
    <table class="table-auto border-collapse border border-gray-400">
        <thead>
            <tr>
                <th class="border border-gray-400 px-4 py-2">No</th>
                <th class="border border-gray-400 px-4 py-2">Nama Produk</th>
                <th class="border border-gray-400 px-4 py-2">Deskripsi Produk</th>
                <th class="border border-gray-400 px-4 py-2">Harga Produk</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nama as $index => $item)
                <tr>
                    <td class="border border-gray-400 px-4 py-2">{{ $index + 1 }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $item }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $desc[$index] }}</td>
                    <td class="border border-gray-400 px-4 py-2">Rp{{ number_format($harga[$index], 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Tailwind CSS & Flowbite -->
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>

<div class="max-w-md mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-semibold mb-6">Input Produk</h1>

    <form method="POST" action="{{ route('produk.simpan') }}">
        @csrf <!-- CSRF Protection Token -->

        <div class="space-y-4">
            <div>
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama:</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama produk"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    required>
            </div>

            <div>
                <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi:</label>
                <textarea id="deskripsi" name="deskripsi" rows="4" placeholder="Masukkan deskripsi produk"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"></textarea>
            </div>

            <div>
                <label for="harga" class="block mb-2 text-sm font-medium text-gray-900">Harga:</label>
                <input type="number" id="harga" name="harga" placeholder="Masukkan harga produk"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    required>
            </div>

            <button type="submit"
                class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                Simpan
            </button>
        </div>
    </form>
</div>
