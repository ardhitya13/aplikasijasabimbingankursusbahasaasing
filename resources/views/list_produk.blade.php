<!-- Tailwind CSS & Flowbite -->
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

<div class="container mx-auto px-6 py-10">
    <h1 class="text-3xl font-bold mb-8 text-center text-blue-700">Daftar Produk</h1>

    <!-- Tabel Produk -->
    <div class="overflow-x-auto shadow-lg rounded-lg">
        <table class="min-w-full bg-white border border-gray-200">
            <thead class="bg-blue-100">
                <tr>
                    <th class="py-3 px-6 text-left font-medium text-gray-700 uppercase border-r border-gray-300">No</th>
                    <th class="py-3 px-6 text-left font-medium text-gray-700 uppercase border-r border-gray-300">Nama Produk</th>
                    <th class="py-3 px-6 text-left font-medium text-gray-700 uppercase border-r border-gray-300">Deskripsi Produk</th>
                    <th class="py-3 px-6 text-left font-medium text-gray-700 uppercase border-r border-gray-300">Harga Produk</th>
                    <th class="py-3 px-6 text-center font-medium text-gray-700 uppercase">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($produk as $index => $item)
                <tr class="border-b border-gray-200 hover:bg-blue-50 transition duration-200">
                    <td class="py-4 px-6">{{ $index + 1 }}</td>
                    <td class="py-4 px-6 font-semibold">{{ $item->nama }}</td>
                    <td class="py-4 px-6 max-w-xs truncate" title="{{ $item->deskripsi }}">{{ $item->deskripsi }}</td>
                    <td class="py-4 px-6 font-semibold text-green-600">Rp{{ number_format($item->harga, 0, ',', '.') }}</td>
                    <td class="py-4 px-6 flex justify-center gap-3">
                        <a href="{{ route('produk.edit', $item->id) }}"
                           class="inline-flex items-center bg-blue-600 text-white px-4 py-1.5 rounded-md text-sm hover:bg-blue-700 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536M9 13l6-6 3 3-6 6H9v-3z" />
                            </svg>
                            Edit
                        </a>
                        <form action="{{ route('produk.delete', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus produk ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="inline-flex items-center bg-red-600 text-white px-4 py-1.5 rounded-md text-sm hover:bg-red-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center py-6 text-gray-500 italic">Belum ada produk tersedia.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Form Tambah Produk -->
    <div class="max-w-lg mx-auto mt-12 bg-white p-8 rounded-xl shadow-lg">
        <h2 class="text-2xl font-semibold mb-6 text-center text-gray-800">Tambah Produk Baru</h2>

        <form method="POST" action="{{ route('produk.simpan') }}">
            @csrf

            <div class="space-y-5">
                <div>
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-700">Nama Produk</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama produk"
                        class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                </div>

                <div>
                    <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-700">Deskripsi Produk</label>
                    <textarea id="deskripsi" name="deskripsi" rows="4" placeholder="Masukkan deskripsi produk"
                        class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-500 resize-none"></textarea>
                </div>

                <div>
                    <label for="harga" class="block mb-2 text-sm font-medium text-gray-700">Harga Produk</label>
                    <input type="number" id="harga" name="harga" placeholder="Masukkan harga produk"
                        class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 text-white py-3 rounded-md font-semibold hover:bg-blue-700 transition">
                    Simpan Produk
                </button>
            </div>
        </form>
    </div>
</div>
