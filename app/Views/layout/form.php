<form id="test-form" class="white-popup-block mfp-hide" action="<?= base_url('proses_pemesanan') ?>" method="POST">
  <?= csrf_field() ?>
  <div class="popup_box ">
    <div class="popup_inner">
      <h3>Form Pemesanan</h3>
      <div class="form-group row">
        <label class="col-sm-4 col-form-label">Nama</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="nama" name="nama" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Nama Pemesan'" placeholder="Masukkan Nama Pemesan" required>
        </div>
      </div>
      <div class="form-group container">
        <div class="row">
          <label class="col-sm-4 col-form-label">Jenis Kelamin</label>
          <div class="col-sm-8">
            <div class="form-row">
              <div class="col-auto">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="Laki-laki" checked>
                  <label class="form-check-label" for="jenis_kelamin">Laki-laki</label>
                </div>
              </div>
              <div class="col-auto">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan">
                  <label class="form-check-label" for="jenis_kelamin">Perempuan</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-4 col-form-label">Nomor Identitas</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="nomor_identitas" name="nomor_identitas" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Nomor Identitas'" placeholder="Masukkan Nomor Identitas" pattern="^([1-9])[0-9]{15}$" title="Isian salah... data harus 16 digit">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-4 col-form-label">Tipe Kamar</label>
        <div class="col-sm-8">
          <select class="form-control form-select" name="tipe_kamar" id="tipe_kamar" required>
            <option value="" selected disabled>Pilih Tipe Kamar</option>
            <option value="Standar">Standard Room</option>
            <option value="Deluxe">Deluxe Room</option>
            <option value="Family">Family Room</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-4 col-form-label">Harga Kamar</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="harga_kamar" name="harga_kamar" readonly>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-4 col-form-label">Tanggal</label>
        <div class="col-sm-8">
          <input type="date" class="form-control" name="tanggal">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-4 col-form-label">Durasi Menginap</label>
        <div class="col-sm-4 input-group">
          <input type="text" class="form-control" id="durasi" name="durasi" pattern="[1-9]|[12][0-9]|3[01]" title="Harus isi angka antara 1 dan 30">
          <span class="input-group-text" id="basic-addon2">Hari</span>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-4 col-form-label">Termasuk breakfast</label>
        <div class="col-sm-2 form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            Ya
          </label>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-4 col-form-label">Total Bayar</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="totalBayarInput" name="total_bayar" readonly>
        </div>
      </div>
      <div class="form-group">
        <button type="button" id="hitung" class="btn btn-outline-primary ml-3">Hitung Total Bayar</button>
        <button type="submit" id="simpan" class="btn btn-outline-success ml-3">Simpan</button>
        <button type="button" id="cancel" class="btn btn-outline-secondary ml-3">Cancel</button>
      </div>
    </div>
  </div>
</form>