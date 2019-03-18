<!-- Menghubungkan dengan view template master -->
@extends('master')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Tentang')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
 
	<p>Ini Adalah Halaman Tentang</p>
	<p>
		Hallo, ini blog pertama saya dan masih ngikutin tutorial. Nama saya Wulansari saya sekolah di SMKN 1 Subang,
        duduk dikelas XI dan mengambil jurusan RPL. Saya anak ke tiga dari dua bersaudara, saya lahir pada tanggal 17 mei 2001.
        Saya berumur 17 tahun , seneng loh walaupun masih ngikutin tutor hehehe. 
	</p>
 
@endsection