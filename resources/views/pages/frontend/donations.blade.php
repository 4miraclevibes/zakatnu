<h2 class="mb-4">Program Donasi</h2>
<div class="row">
    @foreach($donations as $donation)
    <div class="col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">{{ $donation->name }}</h5>
                <div class="card-text mb-3">{!! $donation->description !!}</div>
                <p class="card-text">
                    <strong>Target:</strong> Rp {{ number_format($donation->target_amount, 0, ',', '.') }}
                </p>
                <p class="card-text">
                    <strong>Terkumpul:</strong> Rp {{ number_format($donation->transactions->where('status', 'success')->sum('amount'), 0, ',', '.') }}
                </p>
                <div class="progress mb-3">
                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ ($donation->transactions->where('status', 'success')->sum('amount') / $donation->target_amount) * 100 }}%" aria-valuenow="{{ ($donation->transactions->where('status', 'success')->sum('amount') / $donation->target_amount) * 100 }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#donateModal{{ $donation->id }}">
                    Donasi Sekarang
                </button>
            </div>
        </div>
    </div>

    <!-- Modal for creating transaction -->
    <div class="modal fade" id="donateModal{{ $donation->id }}" tabindex="-1" aria-labelledby="donateModalLabel{{ $donation->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="donateModalLabel{{ $donation->id }}">Donasi untuk: {{ $donation->name }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('transactions.store', $donation->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="amount" class="form-label">Jumlah Donasi (Rp)</label>
                            <input type="number" class="form-control" id="amount" name="amount" required min="1000">
                        </div>
                        <div class="mb-3">
                            <label for="payment_proof" class="form-label">Bukti Pembayaran</label>
                            <input type="file" class="form-control" id="payment_proof" name="payment_proof" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Donasi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
