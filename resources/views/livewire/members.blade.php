<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Manga
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            @endif

            <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Tambah Manga</button>
            
            @if($isModal)
                @include('livewire.create')
            @endif

            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2">manga</th>
                        <th class="px-4 py-2">autor</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($members as $row)
                        <tr>
                            <td class="border px-4 py-2">{{ $row->manga }}</td>
                            <td class="border px-4 py-2">{{ $row->autor }}</td>
                           
                            <td class="border px-4 py-2">
                                <button wire:click="edit({{ $row->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                <button wire:click="delete({{ $row->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Hapus</button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="border px-4 py-2 text-center" colspan="5">Tidak ada data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
<article>
<table>
<article style="text-align: center;">
      <h2 class="m-0">Rekomendasi manga Tahun 2021</h2>
  <p>
  Manga adalah komik yang dibuat dengan ciri khas Jepang dimana kamu akan menemukan banyak hal yang membedakan manga Jepang dengan komik buatan negara lain.

Manga sendiri sudah menjadi industri besar di Jepang dengan popularitas serta jumlah konsumen yang begitu tinggi.

Popularitas tinggi dari manga yang terbit berseri-seri ini lah yang kemudian melahirkan ide para sineas-sineas Jepang untuk membuat manga “naik level”.

Yakni dengan memvisualisikannya ke dalam gambar bergerak atau “anime”.

Anime adalah representasi dari manga yang memberikan sensasi menikmati cerita di dalam manga secara lebih real dan emosional.

Terhitung ada banyak sekali anime yang dirilis berdasarkan seri manga.

Bahkan, hampir keseluruhan anime yang kita tonton berasal dari manga, sobat.

Nah jika tertarik berikut kami sajikan 43+ Rekomendasi Nonton Anime Dari Manga Terbaik yang layak untuk sobat tonton veri Kuota Media.
    </p>
      <p>
        <p style="text-align-center">
          <b>1. Haikyuu!! (2014)</b>
        </p>
      </p>
    <p>
     <img src="template/dist/img/haiku.jpg" width="500" height="320"  />
    </p>
  <p>
  Menempati posisi puncak, Haikyuu!! adalah salah satu anime dari manga terbaik yang sangat kami rekomendasikan untuk kamu saksikan.

Anime sport bertemakan bola voli ini hadir dengan kekuatan cerita yang begitu epic, sobat.

Tak heran jika seri manganya terjual hingga ratusan hingga jutaan kopi.

Haikyuu!! sendiri mengisahkan tentang Hinata Shouyo yang memimpikan untuk menjadi pemain bola voli yang handal meski tinggi tubuhnya jauh di bawah rata-rata.

Memasuki SMA, Hinata bergabung dengan klub voli SMA Karasuno dan menggabungkan kekuatannya dengan Kageyama Tobio, mantan rivalnya dulu.<p>
   
  <P>

    <div class="text-align-center">
      <b>2. Boku no Hero Academia (2016)</b>
    </div>
  <P>
    <br>
        <img src="template/dist/img/boku.jpg" width="500" height="320">
    </br>
  <p>
  Mencari anime dari manga terbaik dengan jumlah fans yang membludak? Maka Boku no Hero Academia adalah jawabannya.

Merupakan salah satu anime overpower terbaik, Boku no Hero Academia diadaptasi dari seri manga.

Kental akan unsur shounen, pastikan kamu menyaksikan Boku no Hero Academia, ya.

Boku no Hero Academia menceritakan tentang seorang bocah bernama Midoriya yang tidak diberkahi quirk alias kekuatan unik yang dimiliki oleh setiap manusia.

Mendambakan ingin menjadi pahlawan super, Midoriya tak pernah menyangka bahwa sang idola, All Might akan memberikan kekuatannya padanya.
  <p>

      <div class="center text-align-center">
       <b>3.Shingeki no Kyojin (2013)</b>
      </div>

  <p>
  <img src="template/dist/img/aot.webp" width="500" height="320"  />
  <p>  
  Shingeki no Kyojin adalah salah satu anime yang paling banyak diperbincangkan dan digilai saat ini.

Lewat plot dengan konflik yang berat, Shingeki no Kyojin yang diadaptasi dari seri manga yang sama terkenalnya ini layak sekali untuk kamu tonton.

Shingeki no Kyojin menceritakan tentang dunia yang mana saat ini diserang oleh spesies aneh bertubuh raksasa yang disebut Titan.

Dibumbui berbagai konspirasi yang licik, saksikan bagaimana salah satu tokoh paling terkenal di anime ini, Levi melawan Titan-titan tersebut.
  </article>

    <br></br>
   
    