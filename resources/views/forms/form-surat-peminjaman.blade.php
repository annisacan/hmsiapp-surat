<div class="container">
    <form method="post" action="{{ route('surat-peminjaman.store') }}" target="_blank">
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
            <label class="labelSelected">Tujuan Surat</label>
            <div class="selec">
            <select name="tujuan_surat" class="kolomSelected" required>
                <option selected disabled></option>
                <option value="A">Internal SI</option>
                <option value="B">Eksternal SI</option>
            </select>
            </div>
            @error('tujuan_surat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 row ">
            <label for="nama_proker" class="col-sm-3 col-form-label">Nama Proker</label>
            <div class="col-sm-9">
                <input type="text" class="form-control " name="nama_proker" placeholder="Nama Proker.." required>
            </div>
            @error('nama_proker')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 row ">
            <label for="bulan_surat" class="col-sm-3 col-form-label">Bulan Surat</label>
            <div class="col-sm-9">
                <input type="text" class="form-control " name="bulan_surat" placeholder="Bulan Surat.." required>
            </div>
            @error('bulan_surat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 row ">
            <label for="lampiran" class="col-sm-3 col-form-label">Lampiran</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="lampiran" placeholder="Lampiran.." required>
            </div>
            @error('lampiran')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 row ">
            <label for="hal" class="col-sm-3 col-form-label">Hal</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="hal" placeholder="Hal.." required>
            </div>
            @error('hal')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3 row">
            <label for="tanggal_surat" class="col-sm-3 col-form-label">Tanggal Surat</label>
            <div class="col-sm-9">
                <input type="date"
                    class="form-control @error('tanggal_surat') is-invalid @enderror"
                    value="{{ old('tanggal_surat') }}" name="tanggal_surat" required>
            </div>
            @error('tanggal_surat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 row ">
            <label for="penerima_undangan" class="col-sm-3 col-form-label">Penerima Undangan</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="penerima_undangan" placeholder="Penerima Undangan.." required>
            </div>
            @error('penerima_undangan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 row ">
            <label for="alamat_penerima" class="col-sm-3 col-form-label">Alamat Penerima</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="alamat_penerima" placeholder="Alamat Penerima.." required>
            </div>
            @error('alamat_penerima')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 row ">
            <label for="isi_surat" class="col-sm-3 col-form-label">Isi Surat</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="isi_surat" placeholder="Isi Surat.." required>
            </div>
            @error('isi_surat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 row">
            <label for="tanggal_acara" class="col-sm-3 col-form-label">Tanggal Acara</label>
            <div class="col-sm-9">
                <input type="date"
                    class="form-control @error('tanggal_acara') is-invalid @enderror"
                    value="{{ old('tanggal_acara') }}" name="tanggal_acara" required>
            </div>
            @error('tanggal_acara')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 row ">
            <label for="waktu" class="col-sm-3 col-form-label">Waktu</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="waktu" placeholder="Waktu.." required>
            </div>
            @error('waktu')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 row ">
            <label for="tempat" class="col-sm-3 col-form-label">Tempat</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="tempat" placeholder="Tempat.." required>
            </div>
            @error('tempat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 row ">
            <label for="nama_pengirim" class="col-sm-3 col-form-label">Nama Pengirim</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="nama_pengirim" placeholder="Nama Pengirim.." required>
            </div>
            @error('nama_pengirim')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 row ">
            <label for="nim_pengirim" class="col-sm-3 col-form-label">Nim Pengirim</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="nim_pengirim" placeholder="NIM Pengirim.." required>
            </div>
            @error('nim_pengirim')
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