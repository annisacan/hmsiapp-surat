<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4 class="text-center" style="text-decoration: underline; margin-top: 1px; margin-bottom: 1px;">BERITA ACARA</h4>
                    <p style="text-align: center; margin-top: 1px; margin-bottom: 1px;">{{ 'No ' . $beritaAcara->nomor_urut. '/' . $beritaAcara->initial_unit . '/' . 'BA' . '/' .  \Carbon\Carbon::parse($beritaAcara->letter_date)->translatedFormat('m/Y') }}</p>
                    <br>
                    <h5 style="text-align: center;">{{$beritaAcara->judul_berita_acara}}</h5>
                    <br>
                    <p>{{'Pada hari ini ' .\Carbon\Carbon::parse($beritaAcara->letter_date)->translatedFormat('l')  . ' tanggal ' . \Carbon\Carbon::parse($beritaAcara->letter_date)->translatedFormat('d') . ' bulan ' . \Carbon\Carbon::parse($beritaAcara->letter_date)->translatedFormat('F'). ' tahun ' . 
                        \Carbon\Carbon::parse($beritaAcara->letter_date)->format('Y'). ' telah melakukan kegiatan ' . $beritaAcara->nama_kegiatan }} </p>
                    <p>Yang bertanda tangan dibawah ini : </p>
                    <tr>
                        <p style="margin-top: 1px; margin-bottom: 1px;"> &nbsp; &nbsp;&nbsp;1&nbsp; &nbsp;Nama  &nbsp; &nbsp;: &nbsp;{{$beritaAcara->nama_pihak_pertama}}</p>
                        <p style="margin-top: 1px; margin-bottom: 1px;"> &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;Jabatan  &nbsp;: &nbsp;{{$beritaAcara->jabatan_pihak_pertama}}</p>
                    </tr>
                    <p style="text-align: center;">Selaku <span style="font-weight: bold;">PIHAK PERTAMA</span>
                    <tr>
                        <p style="margin-top: 1px; margin-bottom: 1px;"> &nbsp; &nbsp;&nbsp;2&nbsp; &nbsp;Nama  &nbsp; &nbsp;: &nbsp;{{$beritaAcara->nama_pihak_kedua}}</p>
                        <p style="margin-top: 1px; margin-bottom: 1px;"> &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;Jabatan  &nbsp;: &nbsp;{{$beritaAcara->jabatan_pihak_kedua}}</p>
                    </tr>
                    <p style="text-align: center;">Selaku <span style="font-weight: bold;">PIHAK KEDUA</span>
                    <br>
                    <p> Demikian Berita Acara ini di buat menurut yang sebenarnya dan dapat di pergunakan sebagai mana mestinya</p>
                    <br>
                    <p>{{'Padang, ' . \Carbon\Carbon::parse($beritaAcara->letter_date)->translatedFormat('d F Y')}}</P>
                    <table class="signature-table">
                        <tr class="pihak">
                            <td>PIHAK PERTAMA</td>
                            <td>PIHAK KEDUA</td>
                        </tr>
                        <tr class="kosong">
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="nama">
                            <td>{{$beritaAcara->nama_pihak_pertama}}</td>
                            <td>{{$beritaAcara->nama_pihak_kedua}}</td>
                        </tr>
                        <tr class="jabatan">
                            <td>{{$beritaAcara->jabatan_pihak_pertama}}</td>
                            <td>{{$beritaAcara->jabatan_pihak_kedua}}</td>
                        </tr>
                    </table>
                    <br>
                    <br>
                    <div class="saksi">
                        <p class="a" >Yang Menyaksikan</p>
                        <br>
                        <br>
                        <p class="b" >{{$beritaAcara->nama_saksi}}</p>
                    </div>
                    <p>{{'FRL/FAZ/RAF/RI/' . $beritaAcara->initial_pimpinan . '/' . $beritaAcara->initial_pengetik . '/' . $beritaAcara->kode_klasifikasi}}</P>
                </div>
            </div>
        </div>
    </section>
    <script>
        window.print();
        window.onafterprint = window.close;
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
        h4, h5 {
            font-size: 14px;
            font-weight: bold;
        }
        @page {
            size: A4; 
            margin-top: 3cm;
            margin-left: 4cm;
            margin-bottom: 3cm;
            margin-right: 3cm;  
        }
        .signature-table {
            width: 100%;
            border-collapse: collapse;
        }
        .signature-table td {
            text-align: center;
            font-weight: bold;
        }
        .signature-table .pihak{
            font-weight: bold;
        }
        .signature-table .kosong{
            width: 100%;
            height: 50px;
        }
        .signature-table .nama{
            font-weight: bold;
            text-decoration: underline;
        }
        .saksi .a{
            text-align: center;
            font-weight: bold;
        }
        .saksi .b{
            text-align: center;
            font-weight: bold;
            text-decoration: underline;
        }
        p {
            text-align: justify;
        }
    </style>
    
</body>

</html>
