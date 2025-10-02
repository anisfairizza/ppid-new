@extends('template')

@section('content')
<main data-spy="scroll" data-target="#navbar-example2" data-offset="0">
  <!-- Start banner_about -->
  <section class="pt_banner_inner">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-md-8 col-lg-12">
          <div class="banner_title_inner margin-b-10">
            <h1 data-aos="fade-up" data-aos-delay="0">
              Form Pengajuan Keberatan Informasi
            </h1>
          </div>
        </div>

      </div>
    </div>
  </section>

 <!-- Start section_contact_four -->
 <section class="section_contact_five no-shadow bg-white">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7">
        <div class="form_cc_four">
          <form action="" class="row">
            
            <div class="col-md-6">
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" nama="namaa" class="form-control" placeholder="Masukkan Nama Lengkap Anda">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>NIK/No.Identitas Pribadi</label>
                <input type="number" name="noiden" class="form-control" placeholder="Masukkan NIK.No.Identitas">
              </div>
            </div>            
            <div class="col-md-6">
              <div class="form-group">
                <label>No Telepon (WA)</label>
                <input type="number" nama="telp" class="form-control" placeholder="Masukkan No Telpon/WA Anda">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Pekerjaan</label>
                <input type="text" nama="gawian" class="form-control" placeholder="Masukkan Pekerjaan Anda">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Alamat Email</label>
                <input type="email" class="form-control" placeholder="Masukkan Email Anda cth . nama@mail.com">
              </div>
            </div>
              <div class="col-md-12">
              <div class="form-group">
                <label>Alamat</label>
                <textarea  nama="almt" class="form-control" rows="3"
                  placeholder="Masukkan Alamat Lengkap Anda"></textarea>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                    <div class="item_upload mb-3 mb-md-0">
                    <label>Upload KTP Pribadi Pemohon</label>
              </div>
            </div>
          </div>
          
          <div class="col-12 d-md-flex justify-content-between margin-t-1">
              <div class="item_upload mb-3 mb-md-0"> 
                <div class="upload__file">
                  <input type="file">
                  <button type="button" class="btn btn_md_primary">
                    <i class="tio attachment"></i>
                    Attach File
                  </button>
                </div>
                <span class="my-auto">Maximum size: 2 MB</span>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                    
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label>Bentuk Informasi yang ingin diminta</label>
                <select class="form-control custom-select" name="kategori">
                  <option>Silahkan dipilih alasan keberatan</option>
                  <option value="sc">Tidak ditanggapinya permintaan informasi</option>
                  <option value="hc">Permintaan informasi tidak ditanggapi sebagaimana yang diminta</option>
                  <option value="sc">Tidak dipenuhinya permintaan informasi</option>
                  <option value="hc">Permintaan informasi tidak ditanggapi sebagaimana yang diminta</option>
                  <option value="sc">Penyampaian informasi yang melebihi jangka waktu standar pelayanan</option>
                  <option value="hc">Pengenaan biaya yang tidak wajar</option>
                  </select>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label>Rincian Detail Keberatan Informasi</label>
                <textarea  nama="detailkeberatan" class="form-control" rows="3"
                  placeholder="Masukkan Rincian Detail Keberatan Informasi"></textarea>
              </div>
            </div>
            
            <div class="col-md-4">
              <div class="form-group">
             
              </div>
            </div>


            <div class="col-md-5">
              <div class="form-group">
              <a href="" class="btn btn_md_primary bg-red rounded-8 c-white h-fit-content">
                Ajukan Keberatan Informasi
              </a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End. section_contact_four -->

@endsection