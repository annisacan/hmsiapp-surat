<div class="container">
    <form method="post" action="{{ route('berita-acara.store') }}" target="_blank">
        @csrf
        <div style="margin-top: 20px;"></div>
        <div class="mb-3 row ">
            <label for="nomor_urut" class="col-sm-3 col-form-label">Nomor Urut</label>
            <div class="col-sm-9">
                <input type="text" class="form-control " name="nomor_urut" placeholder="Nomor Urut.." required>
            </div>
            @error('nomor_urut')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="selected">
            <label class="labelSelected">Unit Kerja Pengolah</label>
            <div class="selec">
            <select name="initial_unit" class="kolomSelected" required>
                <option selected disabled></option>
                <option value="KKSP">KKSP</option>
                <option value="DKM">DIVISI KOMERSIL</option>
                <option value="DKMVU">Unit VARIA USAHA</option>
                <option value="DKMTO">Unit TOSERBA</option>
                <option value="DKMPBM">Unit PBM</option>
                <option value="DKMSUP">Unit SUPPLIER & KONTRAKTOR / DKMSUP</option>
                <option value="DKMKONT">Unit SUPPLIER & KONTRAKTOR / DKMKONT</option>
                <option value="DKMP">Unit PEMBELIAN</option>
                <option value="DKS">DIVISI KEUANGAN & SDM</option>
                <option value="DKSSDM">Unit SDM</option>
                <option value="DKSPBU">Unit SPBU</option>
                <option value="DKSAP">Unit AKUNTANSI & PAJAK</option>
                <option value="DKSKEU">Unit KEUANGAN</option>
                <option value="DKSSP">Unit SIMPAN PINJAM</option>
                <option value="DDT">DIVISI DISTRIBUSI & TRANSPORTASI</option>
                <option value="DDTDR">Unit DISTRIBUSI</option>
                <option value="DDTTR">Unit TRANSPORTASI</option>
                <option value="DOP">DIVISI OPERASIONAL</option>
                <option value="DOPUM">Unit UMUM & LEGAL</option>
                <option value="DOPPKT">Unit PAB.KANTONG</option>
                <option value="DOPGDG">Unit GUDANG</option>
                <option value="DOPK3">Unit SMK3</option>
                <option value="DPI">DIVISI SPI</option>
                <option value="DPIPO">Unit PENGAWAS OPERASIONAL</option>
                <option value="DPIKAD">Unit PENGAWAS KEU & ADM</option>
            </select>
            </div>
            @error('initial_unit')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 row ">
            <label for="judul_berita_acara" class="col-sm-3 col-form-label">Judul Berita Acara</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="judul_berita_acara" placeholder="Judul Berita Acara.." required>
            </div>
            @error('judul_berita_acara')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 row">
            <label for="letter_date" class="col-sm-3 col-form-label">Tanggal Surat</label>
            <div class="col-sm-9">
                <input type="date"
                    class="form-control @error('letter_date') is-invalid @enderror"
                    value="{{ old('letter_date') }}" name="letter_date" required>
            </div>
            @error('letter_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 row ">
            <label for="nama_kegiatan" class="col-sm-3 col-form-label">Nama Kegiatan</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="nama_kegiatan" placeholder="Kegiatan..." required>
            </div>
            @error('nama_kegiatan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 row ">
            <label for="nama_pihak_pertama" class="col-sm-3 col-form-label">Nama Pihak Pertama</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="nama_pihak_pertama" placeholder="Nama Pihak Pertama..." required>
            </div>
            @error('nama_pihak_pertama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 row ">
            <label for="jabatan_pihak_pertama" class="col-sm-3 col-form-label">Jabatan Pihak Pertama</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="jabatan_pihak_pertama" placeholder="Jabatan Pihak Pertama..." required>
            </div>
            @error('jabatan_pihak_pertama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 row ">
            <label for="nama_pihak_kedua" class="col-sm-3 col-form-label">Nama Pihak Kedua</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="nama_pihak_kedua" placeholder="Nama Pihak Kedua..." required>
            </div>
            @error('nama_pihak_kedua')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 row ">
            <label for="jabatan_pihak_kedua" class="col-sm-3 col-form-label">Jabatan Pihak Kedua</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="jabatan_pihak_kedua" placeholder="Jabatan Pihak Kedua..." required>
            </div>
            @error('jabatan_pihak_kedua')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 row ">
            <label for="nama_saksi" class="col-sm-3 col-form-label">Nama Yang Menyaksikan</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="nama_saksi" placeholder="Nama Yang Menyaksikan..." required>
            </div>
            @error('nama_saksi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="selected">
            <label class= "labelSelected">Staf Pimpinan</label>
            <div class= "selec" >
            <select name="initial_pimpinan" class="kolomSelected" required>
                <option selected disabled></option>
                <option value="AE">Azhari Efendi</option>
                <option value="AY">Afriyenti</option>
                <option value="Dv">Devvy Yosita</option>
                <option value="DY">Dessy Yanti</option>
                <option value="EZ">Erizal</option>
                <option value="Es">Elwison</option>
                <option value="Ev">Evi Yuziana</option>
                <option value="JI">Jhon Indra</option>
                <option value="JM">Jamasri</option>
                <option value="JN">Junaidi</option>
                <option value="KM">Kamardi</option>
                <option value="Re">Ria Erliza</option>
                <option value="RF">Rita Fauziah</option>
                <option value="St">Satri</option>
                <option value="Sw">Syafniwati</option>
                <option value="Ws">Warsito</option>
                <option value="YM">Yan Masri</option>
            </select>
            </div>
            @error('initial_pimpinan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 row ">
            <label for="initial_pengetik" class="col-sm-3 col-form-label">Initial Pengetik</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="initial_pengetik"
                    placeholder="Initial Pengetik.." required>
            </div>
            @error('initial_pengetik')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="selected">
            <label class="labelSelected">Kode Klasifikasi</label>
            <div class="selec">
            <select name="kode_klasifikasi" class="kolomSelected" required>
                <option selected disabled></option>
                <option value="DT">DISTRIBUSI dan TRANSPORTASI</option>
                <option value="DT.OO">Transportir</option>
                <option value="DT.01">Distribusi dan Transportasi</option>
                <option value="HK">HUKUM</option>
                <option value="HK.00">Peraturan</option>
                <option value="HK.00.01">Peraturan Ekstern</option>
                <option value="HK.00.02">Peraturan Intern</option>
                <option value="HK.01">Tanah / Bangunan</option>
                <option value="HK.01.01">Pelepasan Hak</option>
                <option value="HK.01.02">Pemilikan & Pemakaian</option>
                <option value="HK.02">Surat Berharga</option>
                <option value="HK.02.01">Akta</option>
                <option value="HK.02.02">Saham</option>
                <option value="HK.02.03">Piagam</option>
                <option value="HK.02.04">Bank garansi</option>
                <option value="HK.03">Dokumen Legal</option>
                <option value="HK.03.01">Sertifikasi</option>
                <option value="HK.03.02">Perjanjian / Kontrak</option>
                <option value="HK.03.03">Bantuan Hukum</option>
                <option value="HK.03.04">Perizinan</option>
                <option value="HK.03.05">Logo Perusahaan</option>
                <option value="HM">HUMAS</option>
                <option value="HM.00">Penerangan</option>
                <option value="HM.00.01">Kegiatan kepihak luar</option>
                <option value="HM.00.02">atan Kepihak Dalam</option>
                <option value="HM.01">Protokoler</option>
                <option value="HM.01.01">Kunjungan & pelayanan ke pihak luar</option>
                <option value="HM.01.02">Kunjungan & pelayanan ke pihak dalam</option>
                <option value="HM.02">Publikasi</option>
                <option value="HM.02.01">Dokumentasi</option>
                <option value="HM.02.02">Penerbitan</option>
                <option value="HM.03">Rekanan</option>
                <option value="HM.03.01">Distributor</option>
                <option value="HM.03.02">Suplier</option>
                <option value="HM.03.03">Kontraktor</option>
                <option value="HM.03.04">Ekspeditor</option>
                <option value="HM.03.05">Lembaga Pemerintah</option>
                <option value="HM.04">Bantuan Bina Lingkungan</option>
                <option value="HM.04.01">Sosial, olah raga dan kesenian</option>
                <option value="HM.04.02">Fisik / sarana umum</option>
                <option value="HM.04.03">Pendidikan</option>
                <option value="HM.04.04">Ekonomi masyarakat</option>
                <option value="HM.04.05">Tenaga kerja</option>
                <option value="HM.04.06">Kesehatan masyarakat dan bencana alam</option>
                <option value="HM.05">Kemitraan</option>
                <option value="HM.05.01">Pinjaman Modal Kerja</option>
                <option value="HM.05.02">Pinjaman Khusus</option>
                <option value="HM.05.03">Hibah</option>
                <option value="KK">KESELAMATAN, KESEHATAN KERJA & LINGKUNGAN HIDUP</option>
                <option value="KK.00">Identifikasi</option>
                <option value="KK.00.01">Peralatan</option>
                <option value="KK.00.02">Bahan</option>
                <option value="KK.00.03">Proses</option>
                <option value="KK.00.04">Lingkungan</option>
                <option value="KK.01">Penilaian</option>
                <option value="KK.01.01">Tim K3LH / Tim PKTD</option>
                <option value="KK.01.02">House Keeping Rate (HKR)</option>
                <option value="KK.01.03">Bulan Mutu dan Bulan K3</option>
                <option value="KK.01.04">Penilaian Kearsipan</option>
                <option value="KK.02">Pemantauan dan Pengendalian</option>
                <option value="KK.02.01">Kesehatan kerja</option>
                <option value="KK.02.02">Keselamatan Kerja</option>
                <option value="KK.02.03">Lingkungan Hidup</option>
                <option value="KK.02.04">Pelaksanaan P2K3</option>
                <option value="KM">KEAMANAN</option>
                <option value="KM.00">Keamanan lingkungan intern</option>
                <option value="KM.00.01">Penyidikan / pemeriksaan</option>
                <option value="KM.00.02">Barang bukti</option>
                <option value="KM.01">Keamanan Lingkungan Ekstern</option>
                <option value="KM.01.01">Penyidikan / pemeriksaan</option>
                <option value="KM.01.02">Barang bukti</option>
                <option value="KM.02">Kerjasama dengan Aparat Hukum</option>
                <option value="KM.03">Koordinasi Keamanan Pemerintah </option>
                <option value="KS">KESEKRETARIATAN DAN ARSIP</option>
                <option value="KS.00">Surat Menyurat </option>
                <option value="KS.00.01">Ekpedisi /Pengiriman Dokumen(Internal & EKternal)</option>
                <option value="KS.01">Laporan</option>
                <option value="KS.01.01">Laporan Kinerja</option>
                <option value="KS.01.02">Laporan tahunan</option>
                <option value="KS.01.03">Prognosa</option>
                <option value="KS.01.04">Laporan Penelitian</option>
                <option value="KS.01.05">Laporan BBM</option>
                <option value="KS.02">Kearsipan</option>
                <option value="KS.02.01">Pengelolaan  arsip aktif</option>
                <option value="KS.02.02">Penyerahan arsip inaktif ke Sentral Arsip  </option>
                <option value="KS.02.03">Penyerahan arsip ke Arsip Nasional </option>
                <option value="KS.02.04">Pemeliharaan arsip</option>
                <option value="KS.02.05">Pemusnahan arsip</option>
                <option value="KS.02.06">Akuisisi Arsip</option>
                <option value="KS.03">Suplies Kantor</option>
                <option value="KS.03.01">Penjilidan</option>
                <option value="KS.03.02">Foto copy</option>
                <option value="KS.03.03">Percetakan identitas</option>
                <option value="KS.03.04">Alat tulis kantor (ATK)</option>
                <option value="KU">KEUANGAN</option>
                <option value="KU.00">Anggaran</option>
                <option value="KU.00.01">Rencana kerja & Anggaran Perusahaan tahunan RKAK</option>
                <option value="KU.01">Perbendaharaan</option>
                <option value="KU.01.01">Kas Bank</option>
                <option value="KU.01.02">Hutang</option>
                <option value="KU.01.02.01">Kredit Limit</option>
                <option value="KU.01.02.02">Jasa Pengantongan</option>
                <option value="KU.01.03">Piutang</option>
                <option value="KU.01.04">Pajak</option>
                <option value="KU.01.05">Asuransi</option>
                <option value="KU.02">Akuntansi</option>
                <option value="KU.02.01">Pencatatan transaksi</option>
                <option value="KU.02.02">Perhitungan harga pokok</option>
                <option value="KU.02.03">Aktiva tetap</option>
                <option value="KU.02.04">Rekonsiliasi</option>
                <option value="LB">PENELITIAN & PENGEMBANGAN</option>
                <option value="LB.00">Penelitian</option>
                <option value="LB.00.01">Survey Penelitian</option>
                <option value="LB.00.02">Study Kelayakan</option>
                <option value="LB.00.03">Aplikasi Produk</option>
                <option value="LB.01">Rancang Bangun</option>
                <option value="LB.01.01">Rancangan Peralatan Utama Pabrik</option>
                <option value="LB.01.02">Rancangan Peralatan Penunjang Pabrik</option>
                <option value="LB.01.03">Rancangan Sarana & Prasarana</option>
                <option value="LB.02">Pengembangan</option>
                <option value="LB.02.01">Inbound / Logistik Management</option>
                <option value="LB.02.02">Capital Expenditure ( Capex ) Management</option>
                <option value="LB.02.03">Capacity Management</option>
                <option value="LB.02.04">Cost Management</option>
                <option value="LB.02.05">Quality Assurance</option>
                <option value="LB.02.06">Inovation</option>
                <option value="MR.00">Manajemen Risiko</option>
                <option value="PB">PERBEKALAN</option>
                <option value="PB.00">Kinerja Suplier</option>
                <option value="PB.00.01">Penunjukan Suplier</option>
                <option value="PB.00.02">Evaluasi Suplier</option>
                <option value="PB.01">Pengadaan Barang</option>
                <option value="PB.01.01">Barang Umum dan Inventaris</option>
                <option value="PB.01.02">Barang Suku Cadang</option>
                <option value="PB.01.03">Operating Suplies</option>
                <option value="PB.02">Pengadaan Jasa</option>
                <option value="PB.02.01">Jasa Angkutan</option>
                <option value="PB.02.02">Jasa Pekerjaan</option>
                <option value="PB.02.03">Jasa Outsourcing</option>
                <option value="PB.02.04">Jasa Fasilitas</option>
                <option value="PB.02.05">Sewa</option>
                <option value="PB.03">Penerimaan Barang</option>
                <option value="PB.03.01">Barang Umum dan Inventaris</option>
                <option value="PB.03.02">Barang Suku Cadang</option>
                <option value="PB.03.03">Barang Operating Suplies</option>
                <option value="PB.04">Pengeluaran Barang</option>
                <option value="PB.04.01">Barang Umum dan Inventaris</option>
                <option value="PB.04.02">Barang Suku Cadang</option>
                <option value="PB.04.03">Barang Operating Suplies</option>
                <option value="PM">PEMELIHARAAN</option>
                <option value="PM.00">Peralatan Produksi </option>
                <option value="PM.00.01">Alat Tambang</option>
                <option value="PM.00.02">Raw Mill</option>
                <option value="PM.00.03">Kiln dan Coal Mill</option>
                <option value="PM.00.04">Cement Mill</option>
                <option value="PM.00.05">Packing Plant</option>
                <option value="PM.00.06">Alat Transport</option>
                <option value="PM.01">Peralatan Penunjang Produksi</option>
                <option value="PM.01.01">Alat Berat</option>
                <option value="PM.01.02">Alat bantu</option>
                <option value="PM.02">Sarana dan Prasarana</option>
                <option value="PM.02.01">Bangunan</option>
                <option value="PM.02.02">Jalan dan Jembatan</option>
                <option value="PM.02.03">Bendung dan Saluran</option>
                <option value="PM.02.04">Taman dan Pekarangan</option>
                <option value="PM.03">Peralatan Uji Mutu</option>
                <option value="PM.03.01">Energi Listrik</option>
                <option value="PM.03.02">Alat Ukur</option>
                <option value="PM.04">Energi Listrik</option>
                <option value="PM.04.01">PLTA</option>
                <option value="PM.04.02">PLTD</option>
                <option value="PM.04.03">Gardu Induk</option>
                <option value="PM.04.04">WHRPG</option>
                <option value="PM.04.05">Distribusi</option>
                <option value="PM.05">Sistem Informasi</option>
                <option value="PM.05.01">Hardware</option>
                <option value="PM.05.02">Software</option>
                <option value="PM.05.03">Jaringan komunikasi</option>
                <option value="PM.05.04">Aplikasi sistem</option>
                <option value="PR">PRODUKSI</option>
                <option value="PR.00">Rencana Produksi</option>
                <option value="PR.00.01">Rencana Produksi Perusahaan ( RKAP )</option>
                <option value="PR.00.02">Rencana Produksi Intern ( Target Intern Perusahaan )</option>
                <option value="PR.01">Realisasi  Produksi</option>
                <option value="PR.01.01">Pemakaian Bahan Baku</option>
                <option value="PR.01.02">Pemakaian Bahan Penolong / Bahan Penunjang</option>
                <option value="PR.01.03">Pemakaian Energi</option>
                <option value="PR.01.04">Kantong</option>
                <option value="PR.02">Mutu Produk dan Bahan</option>
                <option value="PR.02.01">Hasil Pengujian</option>
                <option value="PR.03">Pengeluaran Produk</option>
                <option value="PR.03.01">Pengeluaran Semen</option>
                <option value="PR.03.02">Pengeluaran Klinker</option>
                <option value="PR.03.03">Pengeluaran Kantong</option>
                <option value="PR.04">Record Data</option>
                <option value="PR.04.01">Harian</option>
                <option value="PR.04.02">Periodik</option>
                <option value="PR.04.03">Item Master</option>
                <option value="PS">PEMASARAN</option>
                <option value="PS.00">Distributor</option>
                <option value="PS.00.01">Penunjukan Distributor</option>
                <option value="PS.00.02">Evaluasi Kinerja Distributor</option>
                <option value="PS.01">Kebutuhan Pasar</option>
                <option value="PS.01.01">Pasar Dalam Negeri</option>
                <option value="PS.01.02">Pasar Luar Negeri</option>
                <option value="PS.02">Evaluasi Pemasaran</option>
                <option value="PS.02.01">Kepuasan Pelanggan</option>
                <option value="PS.02.02">Harga</option>
                <option value="PS.02.03">Market Share</option>
                <option value="PS.03">Penjualan</option>
                <option value="PS.03.01">Realisasi Penjualan Dalam Negeri</option>
                <option value="PS.03.02">Realisasi Penjualan Luar Negeri </option>
                <option value="PS.04">Promosi</option>
                <option value="PS.04.01">Barang</option>
                <option value="PS.04.02">Jasa</option>
                <option value="PS.05">Pelayanan Teknis</option>
                <option value="PW">PPENGAWASAN & SISTEM MANAJEMEN</option>
                <option value="PW.00">Pengawasan Ekstern</option>
                <option value="PW.01">Pengawasan Intern</option>
                <option value="PW.01.01">Pengawasan Administrasi & Keuangan</option>
                <option value="PW.01.02">Pengawasan Operasional</option>
                <option value="PW.01.03">Pengawasan SMSP</option>
                <option value="PW.01.04">Pengawasan Risiko dan GCG</option>
                <option value="PW.01.05">Pengawasan TPM</option>
                <option value="PW.01.06">Pengawasan Manajemen Security ( SMP )</option>
                <option value="PW.01.07">Pengawasan Kearsipan</option>
                <option value="PW.01.08">Pengawasan Inovasi</option>
                <option value="PW.02">Pengawasan Anak Perusahaan & Lembaga Penunjang</option>
                <option value="PW.03">Pengawasan Intercompany SGG</option>
                <option value="SM">SUMBER DAYA MANUSIA</option>
                <option value="SM.OO">Formasi</option>
                <option value="SM.00.01">Kebutuhan karyawan</option>
                <option value="SM.00.02">Kebutuhan Tenaga Sub - Kontraktor</option>
                <option value="SM.01">Penerimaan Karyawan</option>
                <option value="SM.01.01">Seleksi</option>
                <option value="SM.01.02">Orientasi / magang</option>
                <option value="SM.01.03">Pengangkatan</option>
                <option value="SM.02">Penilaian</option>
                <option value="SM.02.01">KPI / Evaluasi Karyawan</option>
                <option value="SM.02.02">Mutasi, promosi, demosi </option>
                <option value="SM.02.03">Peringatan dan teguran </option>
                <option value="SM.02.04">Kompetensi</option>
                <option value="SM.03">Penggajian</option>
                <option value="SM.03.01">Gaji</option>
                <option value="SM.03.02">Potongan</option>
                <option value="SM.03.03">Lembur</option>
                <option value="SM.03.04">Tunjangan</option>
                <option value="SM.03.05">Presensi / kehadiraN</option>
                <option value="SM.04">Kesejahteraan</option>
                <option value="SM.04.01">Pakaian dan kelengkapan kerja</option>
                <option value="SM.04.02">Cuti</option>
                <option value="SM.04.03">Perumahan</option>
                <option value="SM.04.04">Bantuan dan santunan</option>
                <option value="SM.04.05">Kesehatan</option>
                <option value="SM.04.06">Bonus</option>
                <option value="SM.04.07">Penghargaan</option>
                <option value="SM.04.08">Asuransi</option>
                <option value="SM.05">Pendidikan dan Pelatihan</option>
                <option value="SM.05.01">Training intern</option>
                <option value="SM.05.02">Training ektern</option>
                <option value="SM.05.03">Magang / penelitian</option>
                <option value="SM.05.04">Seminar / lokakarya / workshop</option>
                <option value="SM.05.05">Program pendidikan lanjutan</option>
                <option value="SM.06">Pemberhentian Hubungan Kerja</option>
                <option value="SM.06.01">Pemberhentian Hubungan Kerja </option>
                <option value="SM.06.02">Berhenti dengan tidak hormat</option>
                <option value="SM.07">Administrasi Karyawan</option>
                <option value="SM.07.01">Identitas data karyawan</option>
                <option value="SM.07.02">Penugasan</option>
                <option value="SM.07.03">Perkawinan dan perceraian </option>
                <option value="SM.08">Evaluasi Organisasi</option>
                <option value="SM.08.01">FKKSP</option>
                <option value="SM.08.02">Lembaga penunjang dan afiliasi</option>
                <option value="SM.08.03">Serikat Pekerja</option>
                <option value="SM.09">Komitmen / Kesepakatan</option>
                <option value="SM.09.01">Perjanjian kerja bersama</option>
            </select>
            </div>
            @error('kode_klasifikasi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 row">
            <label for="letter_file" class="col-sm-3 col-form-label"></label>
            <div class="col-sm-9">
                <button class="btn btn-primary" type="submit">Cetak</button>
            </div>
        </div>
    </form>
</div>

@push('addon-style')
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.1.1/dist/select2-bootstrap-5-theme.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <style>
        .selected {
            display: flex;
            align-items: center;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .selected .labelSelected {
            color: #495057;
            margin-right: 10px;
            flex: 1; /* Memberikan ruang fleksibel pada label untuk menyesuaikan lebar */
        }

        .selected .selec {
            flex: 3; /* Mengubah nilai flex untuk memperpanjang kolom input ke kiri */
        }

        .selected .selec select {
            width: 100%;
            height: 45px;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .selected .selec select:focus {
            border-color: #80bdff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .selected .invalid-feedback {
            display: block;
            width: 100%;
            margin-top: 0.25rem;
            font-size: 80%;
            color: #dc3545;
        }
    </style>
@endpush

@push('addon-script')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(".selectx").select2({
            theme: "bootstrap-5"
        });
    </script>
@endpush