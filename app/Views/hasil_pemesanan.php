<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Pemesanan</title>
  <!-- Tambahkan link CSS untuk Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-5">
    <?php if (isset($pemesanan)) : ?>
      <h1 class="mb-4">Hasil Pemesanan</h1>
      <table class="table">
        <tr>
          <th>Nama</th>
          <td><?= $pemesanan['nama'] ?></td>
        </tr>
        <tr>
          <th>Nomor Identitas</th>
          <td><?= $pemesanan['nomor_identitas'] ?></td>
        </tr>
        <tr>
          <th>Jenis Kelamin</th>
          <td><?= $pemesanan['jenis_kelamin'] ?></td>
        </tr>
        <tr>
          <th>Tipe Kamar</th>
          <td><?= $pemesanan['tipe_kamar'] ?></td>
        </tr>
        <tr>
          <th>Tanggal</th>
          <td><?= date('d/m/Y', strtotime($pemesanan['tanggal'])) ?></td>
        </tr>
        <tr>
          <th>Durasi Menginap</th>
          <td><?= $pemesanan['durasi'] ?> Hari</td>
        </tr>
        <tr>
          <th>Total Bayar</th>
          <td><?= 'Rp ' . number_format($pemesanan['total_bayar'], 0, ',', '.') ?></td>
        </tr>
        <tr>
          <th>Discount</th>
          <td><?= $pemesanan['discount'] ?>%</td>
        </tr>
      </table>
      <a href="<?= base_url() ?>" class="btn btn-primary">Kembali Ke Halaman Utama</a>
    <?php else : ?>
      <p>Data pemesanan tidak ditemukan.</p>
    <?php endif; ?>
  </div>
</body>

</html>