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
        <div class="m-5">
            <div class="row">
                <div class="col">
                    <div class="text-center">
                        <table>
                            <tr class="block">
                                <td style="padding-right: 25px;"><img src="/unand.png" alt="Logo" width="90px" height="90px"></td>
                                <td class="judul">
                                    <h5 >HIMPUNAN MAHASISWA SISTEM INFORMASI</h5>
                                    <h5 >DEPARTEMEN SISTEM INFORMASI</h5>
                                    <h5 >FAKULTAS TEKNOLOGI INFORMASI</h5>
                                    <h5 >UNIVERSITAS ANDALAS</h5>
                                    <p style="margin-top: 1px; margin-bottom: 1px;">Kampus Universitas Andalas, Limau Manis Padang - 27163</p>
                                    <p style="margin-top: 1px; margin-bottom: 1px;">Web : wwww.hmsiunand.com email: officialsi.unand@gmail.com</p>
                                </td>
                                <td class="block" >
                                    <td style="padding-right: 25px;"><img src="/hmsi.png" alt="Logo" width="90px" height="90px"></td>
                                    <p style="margin-top: 1px; margin-bottom: 1px;">&nbsp;&nbsp;</p>
                                    <p style="margin-top: 1px; margin-bottom: 1px;">&nbsp;&nbsp;</p>
                                    <p style="margin-top: 1px; margin-bottom: 1px;">&nbsp;&nbsp;</p>
                                    <p style="margin-top: 1px; margin-bottom: 1px;">&nbsp;&nbsp;</p>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="pengenal">
                        <table>
                            <tr class="no">
                                <td>
                                    <p style="width:300px;margin-top: 1px; margin-bottom: 1px;">Nomor<span style="margin-left:35px;">: </span>{{$suratPermohonan->nomor_urut . '/' . $suratPermohonan->tujuan_surat . '/SPmh' . '/' . $suratPermohonan->nama_proker . '/' . '/HMSI FTI-UNAND' . $suratPermohonan->bulan_surat . '/' . \Carbon\Carbon::parse($suratPermohonan->letter_date)->translatedFormat('Y')}}</p>
                                    <p style="margin-top: 1px; margin-bottom: 1px;">Lampiran<span style="margin-left:3px;">: </span>{{$suratPermohonan->lampiran}}</p>
                                    <p style="margin-top: 1px; margin-bottom: 1px; ">Hal<span style="margin-left:32.5px;">: </span><span style="font-weight: bold; text-decoration: underline;">{{$suratPermohonan->hal}}</span><p>
                                </td>
                                <td>
                                    <p style="width:300px;margin-right:50px; margin-bottom: 55px;display:flex;justify-content:end;">Padang, {{\Carbon\Carbon::parse($suratPermohonan->tanggal_surat)->translatedFormat('d F Y')}}</p>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <p style="margin-top: 1px; margin-bottom: 1px; font-weight: bold; ">Yth, {{$suratPermohonan->penerima_undangan}}</p>
                    <p style="margin-top: 1px; margin-bottom: 1px; font-weight: bold; ">{{$suratPermohonan->alamat_penerima}}</p>
                    <p style="margin-top: 1px; margin-bottom: 1px;">di Tempat</p>
                    <br>
                    <p>Assalamu'alaikum Warahmatullahi Wabarakatuh</p>
                    <p>Puji syukur kita ucapkan atas kehadirat ALLAH SWT yang telah melimpahkan rahmat dan karunia-Nya kepada kita semua. Shalawat beriringan salam kita kirimkan kepada Nabi Muhammad SAW sebagai contoh tauladan kita. Doa dan harapan kami semoga Bapak/Ibu senantiasa berada dalam keadaan sehat walafiat. Aamiin.</p>
                    <p>Dengan ini kami menyampaikan bahwa akan {{$suratPermohonan->isi_surat}}, yang akan dilaksanakan pada :</p>
                    <br>
                    <p style="margin-top: 1px; margin-bottom: 1px;">Hari/Tanggal<span style="margin-left:3px;">: </span>{{\Carbon\Carbon::parse($suratPermohonan->tanggal_acara)->translatedFormat('l/ d F Y')}}</p>
                    <p style="margin-top: 1px; margin-bottom: 1px;">Waktu<span style="margin-left:35px;">: </span>{{$suratPermohonan->waktu}}</p>
                    <p style="margin-top: 1px; margin-bottom: 1px;">Tempat<span style="margin-left:30px;">: </span>{{$suratPermohonan->tempat}}</p>
                    <p style="margin-top: 15px;">Demikianlah surat permohonan ini kami buat, atas perhatian dan kesedian Bapak/Ibu kami ucapkan terimakasih.</p>
                    <p>Wassalamualaikum Warahmatullahi Wabarakatuh</p>
                    <p style="margin-top: 1px; margin-bottom: 1px;">Hormat kami,</p>
                    <p style="margin-top: 1px; margin-bottom: 1px;">Ketua Umum HMSI</p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <p style="margin-top: 1px; margin-bottom: 1px; font-weight: bold; text-decoration: underline;">{{$suratPermohonan->nama_pengirim}}</p>
                    <p style="margin-top: 1px; margin-bottom: 1px;"> 'NIM' . {{$suratPermohonan->nim_pengirim}}</p>
                    <br>
                    <br>
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
            font-family: 'Times New Roman', Times, serif;
            font-size: 12px;
        }
        h4, h5 {
            font-family: 'Times New Roman', Times, serif;
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
        p {
            text-align: justify;
        }
        .text-center table {
            font-family: 'Times New Roman', Times, serif;
            width: 100%;
            border-bottom: 1px solid #000;
            border-bottom: 1px solid #000;
        }

        .text-center td {
            padding: 10px; /* Atur sesuai kebutuhan jarak antar sel */
        }

        .text-center h5, .text-center p {
            margin: 5px 0; /* Atur sesuai kebutuhan baris antar paragraf */
        }
        .text-center h5{
            font-size: 12px;
            margin-bottom: 1px;
        }
        .text-center h6{
            font-size: 8px;
            font-weight: bold;
            text-align: justify;
        }
        .text-center p {
            font-size: 8px;/* Atur sesuai kebutuhan baris antar paragraf */
        }
        .text-center .block .judul p {
            text-align: center;
        }
        .text-center .block .banker p {
            text-align: left;
            white-space: nowrap;
        }
        .text-center .block .banker{
            padding-top: 26px;
        }
        .pengenal{
            text-align: justify;
        }


    </style>
    
</body>

</html>
