@extends('layout.master')

@section('content')
    <div id="wrapper">
        <div class="row">
            <div class="col-md-6">
                <h2 class="mb-4">Surat Keluar</h2>
            </div>
        </div>
        <div id="content-wrapper" class="d-flex flex-column">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-sm-flex justify-content-between align-items-center">
                    <h2 class="m-0">Form Kirim Surat</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="namaRequest">Nama Surat</label>
                                <input type="text" class="form-control" name="namRequest">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="jenisSurat">Jenis Surat</label>
                                <select type="text" class="form-control" name="jenisSurat">
                                    <option value="Surat Undangan"> Surat Undangan</option>
                                    <option value="Surat Perizinan"> Surat Perizinan</option>
                                    <option value="Surat Peminjaman"> Surat Peminjaman</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="TanggalSurat">Tanggal Surat</label>
                                <input type="date" class="form-control" name="TanggalSurat">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="namaKegiatan">Nama Kegiatan</label>
                                <input type="text" class="form-control" name="namaKegiatan">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="deskripsiSurat">Deskripsi Surat</label>
                                <textarea type="text" class="form-control" name="deskripsiSurat"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="drag-image">
                            <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                            <h6>Drag & Drop File Here</h6>
                            <span>OR</span>
                            <button>Browse File</button>
                            <input type="file" hidden>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

<script>
    const dropArea = document.querySelector(".drag-image"),
dragText = dropArea.querySelector("h6"),
button = dropArea.querySelector("button"),
input = dropArea.querySelector("input");
let file; 

button.onclick = ()=>{
  input.click(); 
}

input.addEventListener("change", function(){
 
  file = this.files[0];
  dropArea.classList.add("active");
  viewfile();
});

dropArea.addEventListener("dragover", (event)=>{
  event.preventDefault();
  dropArea.classList.add("active");
  dragText.textContent = "Release to Upload File";
});


dropArea.addEventListener("dragleave", ()=>{
  dropArea.classList.remove("active");
  dragText.textContent = "Drag & Drop to Upload File";
}); 

dropArea.addEventListener("drop", (event)=>{
  event.preventDefault(); 
   
  file = event.dataTransfer.files[0];
  viewfile(); 
});
</script>
