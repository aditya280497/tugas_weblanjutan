<h4 class="text-center":>Menu<h4>
<div class="list-group list-group-flush">
  <a href="#" class="list-group-item list-group-item-action {{ (request()->is('mhs')) ? 'active' : ''}}">Mahasiswa</a>
  <a href="#" class="list-group-item list-group-item-action">Dosen</a>
  <a href="/Fakultas" class="list-group-item list-group-item-action {{ (request()->is('Fakultas')) ? 'active' : ''}}">Program Studi</a>
  <a href="#" class="list-group-item list-group-item-action">Mata Kuliah</a>
  <a href="#" class="list-group-item list-group-item-action">Kerja Praktek</a>
  <a href="#" class="list-group-item list-group-item-action">Skripsi</a>
  <a href="#" class="list-group-item list-group-item-action">Pendaftaran Mahasiswa Baru</a>
</div>