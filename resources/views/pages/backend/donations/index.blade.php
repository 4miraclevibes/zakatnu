@extends('layouts.backend.main')

@section('content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <div class="card-header">
      <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#createModal">
        Buat Donasi
      </button>
    </div>
  </div>
  <div class="card mt-2">
    <h5 class="card-header">Daftar Donasi</h5>
    <div class="table-responsive text-nowrap p-3">
      <table class="table" id="example">
        <thead>
          <tr class="text-nowrap table-dark">
            <th class="text-white">No</th>
            <th class="text-white">Nama</th>
            <th class="text-white">Terkumpul</th>
            <th class="text-white">Target</th>
            <th class="text-white">Tanggal Dibuat</th>
            <th class="text-white">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($donations as $donation)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $donation->name }}</td>
            <td>Rp {{ number_format($donation->transactions->sum('amount'), 0, ',', '.') }}</td>
            <td>Rp {{ number_format($donation->target_amount, 0, ',', '.') }}</td>
            <td>{{ date('l, d F Y', strtotime($donation->created_at)) }}</td>
            <td>
              <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $donation->id }}">
                Edit
              </button>
              <form action="{{ route('donations.destroy', $donation->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- / Content -->

<!-- Create Modal -->
<div class="modal fade" id="createModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Buat Donasi Baru</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('donations.store') }}" method="POST">
        @csrf
        <div class="modal-body">
          <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="editor" name="description" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <label for="target_amount" class="form-label">Target Jumlah</label>
            <input type="number" class="form-control" id="target_amount" name="target_amount" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Edit Modals -->
@foreach ($donations as $donation)
<div class="modal fade" id="editModal{{ $donation->id }}" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Donasi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('donations.update', $donation->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="modal-body">
          <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $donation->name }}" required>
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="editor1" name="description" rows="3">{{ $donation->description }}</textarea>
          </div>
          <div class="mb-3">
            <label for="target_amount" class="form-label">Target Jumlah</label>
            <input type="number" class="form-control" id="target_amount" name="target_amount" value="{{ $donation->target_amount }}" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endforeach

@endsection
