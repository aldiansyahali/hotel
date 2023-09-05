<?php 

namespace App\Models;

use CodeIgniter\Model;

class PemesananModel extends Model
{
    protected $table = 'pemesanan';
    protected $primaryKey = 'id'; // Kolom primary key tabel pemesanan
    protected $allowedFields = ['nama', 'nomor_identitas', 'jenis_kelamin', 'tipe_kamar','tanggal', 'durasi', 'discount', 'total_bayar'];
}
