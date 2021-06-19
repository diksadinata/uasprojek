<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Member;

class Members extends Component
{
    public $members, $status, $manga, $autor, $member_id;
    public $isModal = 0;
    public function render()
    {
        $this->members = Member::orderBy('created_at', 'DESC')->get();
        return view('livewire.members')->layout('layouts.main');
    }
 //FUNGSI INI AKAN DIPANGGIL KETIKA TOMBOL TAMBAH ANGGOTA DITEKAN
 public function create()
 {
     //KEMUDIAN DI DALAMNYA KITA MENJALANKAN FUNGSI UNTUK MENGOSONGKAN FIELD
     $this->resetFields();
     //DAN MEMBUKA MODAL
     $this->openModal();
 }

 //FUNGSI INI UNTUK MENUTUP MODAL DIMANA VARIABLE ISMODAL KITA SET JADI FALSE
 public function closeModal()
 {
     $this->isModal = false;
 }

 //FUNGSI INI DIGUNAKAN UNTUK MEMBUKA MODAL
 public function openModal()
 {
     $this->isModal = true;
 }

 //FUNGSI INI UNTUK ME-RESET FIELD/KOLOM, SESUAIKAN FIELD APA SAJA YANG KAMU MILIKI
 public function resetFields()
 {
     $this->manga = '';
     $this->autor = '';
     
 }

 //METHOD STORE AKAN MENG-HANDLE FUNGSI UNTUK MENYIMPAN / UPDATE DATA
 public function store()
 {
     //MEMBUAT VALIDASI
     $this->validate([
         'manga' => 'required|string',
         'autor' => 'required|string|unique:members,autor,'. $this->member_id
         
     ]);

     //QUERY UNTUK MENYIMPAN / MEMPERBAHARUI DATA MENGGUNAKAN UPDATEORCREATE
     //DIMANA ID MENJADI UNIQUE ID, JIKA IDNYA TERSEDIA, MAKA UPDATE DATANYA
     //JIKA TIDAK, MAKA TAMBAHKAN DATA BARU
     Member::updateOrCreate(['id' => $this->member_id], [
         'manga' => $this->manga,
         'autor' => $this->autor,
       
     ]);

     //BUAT FLASH SESSION UNTUK MENAMPILKAN ALERT NOTIFIKASI
     session()->flash('message', $this->member_id ? $this->manga . ' Diperbaharui': $this->manga . ' Ditambahkan');
     $this->closeModal(); //TUTUP MODAL
     $this->resetFields(); //DAN BERSIHKAN FIELD
 }

 //FUNGSI INI UNTUK MENGAMBIL DATA DARI DATABASE BERDASARKAN ID MEMBER
 public function edit($id)
 {
     $member = Member::find($id); //BUAT QUERY UTK PENGAMBILAN DATA
     //LALU ASSIGN KE DALAM MASING-MASING PROPERTI DATANYA
     $this->member_id = $id;
     $this->manga = $member->manga;
     $this->autor = $member->autor;

     $this->openModal(); //LALU BUKA MODAL
 }

 //FUNGSI INI UNTUK MENGHAPUS DATA
 public function delete($id)
 {
     $member = Member::find($id); //BUAT QUERY UNTUK MENGAMBIL DATA BERDASARKAN ID
     $member->delete(); //LALU HAPUS DATA
     session()->flash('message', $member->manga . ' Dihapus'); //DAN BUAT FLASH MESSAGE UNTUK NOTIFIKASI
 }
}
