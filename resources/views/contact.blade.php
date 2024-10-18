@extends('layouts.layout')
@section("title", "Contact")

@section('konten')
    <div class="min-h-fit flex items-center justify-center bg-[#c7e3cb] mt-16"> 
        <div class="w-full max-w-4xl mx-auto border rounded-md shadow-lg m-5">
            <div class="bg-green bg-opacity-10 rounded-lg overflow-hidden">
                <div class="p-6">
                    <h2 class="text-lg font-semibold text-black text-center mb-4">
                        Daftar Kontak
                    </h2>
                    <div class="relative mt-4 overflow-x-auto">
                        <div class="border border-black-300 rounded-lg">
                            <table class="w-full text-sm text-left bg-transparent">
                                <thead class="bg-[#8dc797] text-black">
                                    <tr>
                                        <th scope="col" class="px-4 py-2 text-center">No</th>
                                        <th scope="col" class="px-4 py-2 text-center">Nama</th>
                                        <th scope="col" class="px-4 py-2 text-center">Email</th>
                                        <th scope="col" class="px-4 py-2 text-center">Nomor HP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $contact)
                                        <tr class="bg-transparent border-b text-black hover:bg-opacity-30 transition duration-200">
                                            <td class="px-4 py-2 text-center">{{ $loop->iteration }}</td>
                                            <td class="px-4 py-2 text-center">{{ $contact['nama'] }}</td>
                                            <td class="px-4 py-2 text-center">{{ $contact['email'] }}</td>
                                            <td class="px-4 py-2 text-center">{{ $contact['no'] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
