@extends('template')

@section('content')
      <!-- Stat main -->

      <section class="pt_banner_inner banner_Sblog_default">
          <div class="container">
            <div class="row justify-content-center text-center">
              <div class="col-md-2 col-lg-12 my-auto">
                <div class="banner_title_inner margin-b-8">
                  <h1> Standar Pelayanan Permohonan Informasi Publik
                  </h1>
                </div>
              </div>
            </div>
        </section>

      <main data-spy="scroll" data-target="#navbar-example2" data-offset="0">
        <section class="content-Sblog" data-sticky-container>
          <div class="container">
            <div class="row">
              <div class="col-lg-2">
                <div class="fixSide_scroll" data-sticky-for="1023" data-margin-top="100">
                  <div class="item">
                    <div class="profile_user">
                      <img src="../../assets/img/lldikti/kemdikbud.png" alt="">
                      <div class="txt">
                        <h4>
                          Admin PPID
                        </h4>
                        <time>Mei, 2025</time>
                      </div>
                      <a href="#" class="btn btn_profile c-white sweep_top sweep_letter rounded-pill bg-lightgreen">
                        <div class="inside_item">
                          <span data-hover="PPID">Admin</span>
                          <span></span>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="share_socail">
                    <div class="title">Ikuti kami</div>

                    <button class="btn icon" data-toggle="tooltip" data-placement="right" title="Website"
                      data-sharer="website" 
                      data-url="https://www.lldikti11.kemdikbud.go.id">
                      <i class="tio website"></i>
                    </button>
                  
                    <button class="btn icon" data-toggle="tooltip" data-placement="right" title="Instagram"
                      data-sharer="instagram" data-hashtag="hashtag" data-url="https://www.instagram.com/lldikti_11">
                      <i class="tio instagram"></i>
                    </button>

                    <button class="btn icon" data-toggle="tooltip" data-placement="right" title="Whatsapp"
                      data-sharer="whatsapp" 
                      data-url="https://wa.me/6281255614411">
                      <i class="tio whatsapp_outlined"></i>
                    </button>
                 </div>
                </div>
              </div>
              <div class="col-lg-10">
                <div class="body_content">
                  <img src="../../assets/img/lldikti/SPPermohonanInformasiPublik.jpg" alt="">                  
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
      <!-- end main -->
    </div>
    <!-- [id] content -->
@endsection