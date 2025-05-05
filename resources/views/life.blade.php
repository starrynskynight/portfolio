@extends('master')

@section('titlePage', 'Project')

@section('content')

<style>
   .project-gallery {
    display: flex;
    flex-direction: column;
    gap: 20px;
    width: 50%;
    height: 100%;
    padding: 20px;
    background-color: rgba(75, 176, 204, 0.05);
    border-radius: 10px;
    overflow-y: auto;
    margin-left: 15px;
}

.project-gallery img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 8px;
    border: 2px solid rgba(255, 255, 255, 0.6);
}

.ex {
    min-height: 1080px;
    margin-bottom: 20px;
    margin-right: 20px;
}


    </style>
<div class="container_9 flex justify-start items-start gap-10 pt-24 ">

  <!-- Kiri: Foto Projek (vertikal) -->
  <div class="project-gallery flex flex-col gap-5 w-1/3">
    <img src="{{ asset('images/menucrn.png') }}" alt="Project 1" class="w-full h-auto object-cover rounded-lg border-2 border-white">
    <img src="{{ asset('images/homesugar.png') }}" alt="Project 2" class="w-full h-auto object-cover rounded-lg border-2 border-white">
    <img src="{{ asset('images/sugarmenu.png') }}" alt="Project 3" class="w-full h-auto object-cover rounded-lg border-2 border-white">
    <img src="{{ asset('images/mobile.png') }}" alt="Project 4" class="w-full h-auto object-cover rounded-lg border-2 border-white">
  </div>

  <!-- Kanan: Penjelasan Projek -->
  <div class="container_10 w-2/3 bg-[#1B263B] p-6 rounded-lg shadow-lg ex">
    <ol class="relative border-s border-gray-400">
      <li class="mb-32 ms-4">
        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white"></div>
        <time class="mb-1 text-sm font-normal leading-none text-gray-400">Cita Rasa Nusantara</time>
        <h3 class="text-lg font-semibold text-white">Menu Page</h3>
        <p class="mb-4 text-base font-normal text-gray-400">Ini adalah halaman menu dari CRN versi desktop. Pengguna dapat melihat berbagai pilihan menu yang ditampilkan dengan tata letak yang rapi, memudahkan dalam menjelajahi dan memilih menu favorit mereka.</p>
      </li>
      <li class="mb-28 ms-4">
        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white"></div>
        <time class="mb-1 text-sm font-normal leading-none text-gray-400">Sugar Plum</time>
        <h3 class="text-lg font-semibold text-white">Main Page</h3>
        <p class="text-base font-normal text-gray-400">Tampilan ini merupakan halaman utama dari aplikasi Sugar Plum versi desktop. Desainnya fokus pada tampilan visual yang menarik untuk menarik perhatian pengguna sejak awal, dengan penempata navigasi dan promosi produk secara strategis.</p>
      </li>
      <li class="mb-28 ms-4">
        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white"></div>
        <time class="mb-1 text-sm font-normal leading-none text-gray-400">Sugar Plum</time>
        <h3 class="text-lg font-semibold text-white">Cart Page</h3>
        <p class="text-base font-normal text-gray-400">Tampilan ini menunjukkan halaman keranjang belanja pada versi dekstop aplikasi Sugar Plum. Pengguna dapat melihat daftar produk yang telah dipilih, lengkap dengan jumlah dan harga, serta tombol untuk melanjutkan ke proses pembayaran secara praktis dan cepat.
        </p>
      </li>
      <li class="mb-24 ms-4">
        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white"></div>
        <time class="mb-1 text-sm font-normal leading-none text-gray-400">Sugar Plum</time>
        <h3 class="text-lg font-semibold text-white">Mobile Sign In</h3>
        <p class="text-base font-normal text-gray-400">Gambar ini menunjukkan tampilan versi mobile dari halaman utama Sugar Plum. Desainnya tetap mempertahankan estetika serta fungsi, sehingga pengguna tetap nyaman saat mengakses melalui perangkat seluler.</p>
      </li>
    </ol>
  </div>

</div>


@endsection
