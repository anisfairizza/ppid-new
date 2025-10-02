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
              Form Pengajuan Informasi
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
          @if (session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
      @endif
          @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

          <form action="{{ url('/form-ajuan') }}" method="post" class="row">
            @csrf
            <div class="col-md-6">
              <div class="form-group">
                <label>Kategori Permohonan</label>
                <select class="form-control custom-select" name="kategori" required>
                  <option>Please Select</option>
                  <option value="1">Perorangan</option>
                  <option value="2">Instansi/Lembaga/Organisasi</option>
                  <option value="3">Kelompok Orang</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap Anda" required>
          
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>NIK/No.Identitas Pribadi</label>
                <input type="number" name="no_nik" class="form-control" placeholder="Masukkan NIK.No.Identitas" required>
              </div>
            </div>            
            <div class="col-md-6">
              <div class="form-group">
                <label>No Telepon (WA)</label>
                <input type="number" name="no_wa" class="form-control" placeholder="Masukkan No Telpon/WA Anda">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Pekerjaan</label>
                <input type="text" name="pekerjaan" class="form-control" placeholder="Masukkan Pekerjaan Anda">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Alamat Email</label>
                <input type="email" name="email" class="form-control" placeholder="Masukkan Email Anda cth . nama@mail.com">
              </div>
            </div>
              <div class="col-md-12">
              <div class="form-group">
                <label>Alamat</label>
                <textarea  name="alamat" class="form-control" rows="3"
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
                  <input type="file" name="filektp">
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
                <label>Rincian Informasi yang ingin diketahui</label>
                <textarea  name="informasirincian" class="form-control" rows="3"
                  placeholder="Masukkan Rincian Informasi yang Ingin Diketahui"></textarea>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label>Tujuan Permohonan Informasi yang ingin diketahui</label>
                <textarea  name="informasitujuan" class="form-control" rows="3"
                  placeholder="Masukkan Tujuan Permohonan Informasi yang Ingin Diketahui"></textarea>
              </div>
            </div>
            
            <div class="col-md-6">
              <div class="form-group">
                <label>Bentuk Informasi yang ingin diminta</label>
                <select class="form-control custom-select" name="informasibentuk">
                  <option>Silahkan dipilih dibawah ini</option>
                  <option value="sc">Softcopy</option>
                  <option value="hc">Hardcopy</option>
                  
                  </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Cara Mendapatkan Informasi
                </label>
                <select class="form-control custom-select" name="informasicara">
                  <option>Silahkan dipilih dibawah ini</option>
                  <option value="1">Melihat atau mengetahui</option>
                  <option value="2">Meminta salinan</option>                  
                  </select>
              </div>
            </div>
            
            <div class="col-md-4">
              <div class="form-group">
             
              </div>
            </div>


            <div class="col-md-5">
              <div class="form-group">
              <button type="submit" class="btn btn_md_primary bg-blue rounded-8 c-white h-fit-content">
                Ajukan Permohonan
              </button>
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