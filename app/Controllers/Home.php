<?php

namespace App\Controllers;

use App\Models\PemesananModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('Home');
    }

    public function proses_pemesanan()
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'nomor_identitas' => $this->request->getPost('nomor_identitas'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'tipe_kamar' => $this->request->getPost('tipe_kamar'),
            'tanggal' => $this->request->getPost('tanggal'),
            'durasi' => $this->request->getPost('durasi'),
            'total_bayar' => $this->request->getPost('total_bayar'),
        ];

        if ($this->request->getPost('durasi') > '3') {
            $data['discount'] = 10; // Nilai diskon
        } else {
            $data['discount'] = 0; // Tidak ada diskon
        }

        // Lanjutkan dengan menyimpan data ke dalam database
        $pemesanan_model = new PemesananModel();
        $pemesanan_model->insert($data);

        // Redirect atau lakukan tindakan lain setelah menyimpan data
        $insertedId = $pemesanan_model->getInsertID(); // Mendapatkan ID dari data yang baru saja disimpan
        return redirect()->to("/hasil_pemesanan/{$insertedId}");
    }

    public function hasil_pemesanan($id)
    {
        $pemesanan_model = new PemesananModel();
        $pemesanan = $pemesanan_model->find($id);

        if ($pemesanan) {
            return view('hasil_pemesanan', ['pemesanan' => $pemesanan]);
        } else {
            return view('hasil_pemesanan'); // Jika data tidak ditemukan
        }
    }
}
