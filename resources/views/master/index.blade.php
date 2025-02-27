<x-layouts.app>
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        
        <div class="max-w-sm rounded-lg shadow-lg bg-white p-4">
          {{-- <img class="w-full h-48 object-cover rounded-md" src="https://via.placeholder.com/300" alt="Gambar Card"> --}}
          <div class="mt-4">
            <h2 class="text-xl font-semibold text-gray-800">Perusahaan Terdaftar</h2>
<button class="mt-4 bg-blue-500 text-white float-right text-sm px-4 py-2 rounded hover:bg-blue-600">
              Lihat Detail
            </button>
                <table class="border mt-2 text-gray-800">
                    <tr>
                        <th class="border p-1">No.</th>
                        <th class="border p-1">Nama Perusahaan</th>
                        <th class="border p-1">Alamat</th>
                        <th class="border p-1">Logo</th>
                        <th class="border p-1">status</th>
                    </tr>
                    @foreach($perusahaan as $key => $usaha)
                    <tr>
                        <td class="border p-1">{{$perusahaan->firstItem() + $key}}</td>
                        <td class="border p-1">{{$usaha->perusahaan}}</td>
                        <td class="border p-1">{{$usaha->alamat}}</td>
                        <td class="border p-1">{{$usaha->logo}}</td>
                        <td class="border p-1">{{$usaha->status}}</td>
                    </tr>
                    @endforeach
                </table>

            
          </div>
        </div>







        <div class="row ">
            <div class="col mb-2">
                Perusahaan Terdaftar <button class="bg-blue-500 text-white text-sm px-2 py-1 rounded float-right hover:bg-green-600">
  Klik Saya
</button>


    

                <table class="border mt-2">
                    <tr>
                        <th class="border p-1">No.</th>
                        <th class="border p-1">Nama Perusahaan</th>
                        <th class="border p-1">Alamat</th>
                        <th class="border p-1">Logo</th>
                        <th class="border p-1">status</th>
                    </tr>
                    @foreach($perusahaan as $key => $usaha)
                    <tr>
                        <td class="border p-1">{{$perusahaan->firstItem() + $key}}</td>
                        <td class="border p-1">{{$usaha->perusahaan}}</td>
                        <td class="border p-1">{{$usaha->alamat}}</td>
                        <td class="border p-1">{{$usaha->logo}}</td>
                        <td class="border p-1">{{$usaha->status}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="col mb-2">
                Kantor
            </div>
            <div class="col">
                Jabatan
            </div>
        </div>
    </div>
    
</x-layouts.app>