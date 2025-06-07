<!-- Tailwind & Flowbite -->
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

<div class="max-w-md mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-semibold mb-6">Edit Produk</h1>

    <form method="POST" action="{{ route('produk.update', $produk->id) }}">
        @csrf
        @method('PUT')

        <div class="space-y-4">
            <div>
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama:</label>
                <input type="text" id="nama" name="nama" value="{{ $produk->nama }}" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
            </div>

            <div>
                <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi:</label>
                <textarea id="deskripsi" name="deskripsi" rows="4"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">{{ $produk->deskripsi }}</textarea>
            </div>

            <div>
                <label for="harga" class="block mb-2 text-sm font-medium text-gray-900">Harga:</label>
                <input type="number" id="harga" name="harga" value="{{ $produk->harga }}" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
            </div>

            <button type="submit"
                class="w-full text-white bg-blue-600 hover:bg-blue-700 rounded-lg text-sm px-5 py-2.5 text-center">
                Update
            </button>
        </div>
    </form>
</div>
