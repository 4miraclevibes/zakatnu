@extends('layouts.backend.main')

@section('content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card mt-2">
    <h5 class="card-header">Daftar Transaksi</h5>
    <div class="table-responsive text-nowrap p-3">
      <table class="table" id="example">
        <thead>
          <tr class="text-nowrap table-dark">
            <th class="text-white">No</th>
            <th class="text-white">Jumlah</th>
            <th class="text-white">Pengguna</th>
            <th class="text-white">Donasi</th>
            <th class="text-white">Bukti Pembayaran</th>
            <th class="text-white">Status</th>
            <th class="text-white">Tanggal</th>
            <th class="text-white">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($transactions as $transaction)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>Rp {{ number_format($transaction->amount, 0, ',', '.') }}</td>
            <td>{{ $transaction->user->name }}</td>
            <td>{{ $transaction->donation->name }}</td>
            <td><a href="{{ Storage::url($transaction->payment_proof) }}" target="_blank">Lihat Bukti Pembayaran</a></td>
            <td>
              <span class="badge bg-{{ $transaction->status == 'success' ? 'success' : 'danger' }}">
                {{ ucfirst($transaction->status) }}
              </span>
            </td>
            <td>{{ date('d F Y', strtotime($transaction->created_at)) }}</td>
            <td>
              <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $transaction->id }}">
                Edit
              </button>
              <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST" style="display:inline-block;">
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

<!-- Edit Modals -->
@foreach ($transactions as $transaction)
<div class="modal fade" id="editModal{{ $transaction->id }}" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Status Transaksi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('transactions.update', $transaction->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="modal-body">
          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status" required>
              <option value="success" {{ $transaction->status == 'success' ? 'selected' : '' }}>Sukses</option>
              <option value="failed" {{ $transaction->status == 'failed' ? 'selected' : '' }}>Gagal</option>
            </select>
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
