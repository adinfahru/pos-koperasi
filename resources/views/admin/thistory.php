<?php
// Ambil data transaksi dari database atau sumber lainnya
$transactions = App\Models\Transaction::all();

// Proses data untuk jumlah transaksi per bulan
$transactionData = [];
foreach ($transactions as $transaction) {
    $month = $transaction->created_at->format('Y-m');
    if (array_key_exists($month, $transactionData)) {
        $transactionData[$month]++;
    } else {
        $transactionData[$month] = 1;
    }
}
?>