<h2 class="mb-4">Riwayat Transaksi Anda</h2>
@if($transactions->isEmpty())
    <p>Anda belum melakukan transaksi apapun.</p>
@else
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Program Donasi</th>
                    <th>Jumlah</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transactions as $index => $transaction)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $transaction->created_at->format('d M Y H:i') }}</td>
                    <td>{{ $transaction->donation->name }}</td>
                    <td>Rp {{ number_format($transaction->amount, 0, ',', '.') }}</td>
                    <td>
                        <span class="badge bg-{{ $transaction->status == 'success' ? 'success' : 'danger' }}">
                            {{ ucfirst($transaction->status) }}
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif
