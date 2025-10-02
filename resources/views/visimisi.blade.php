@extends('template')

@section('content')
      <!-- Stat main -->
      <main data-spy="scroll" data-target="#navbar-example2" data-offset="0">
        <!-- Start Banner Section -->
        <section class="pt_banner_inner banner_Sblog_default">
          <div class="container">
            <div class="row justify-content-center text-center">
              <div class="col-md-8 col-lg-7 my-auto">
                <div class="banner_title_inner margin-b-8">
                  <h1>
                    Visi dan Misi PPID
                  </h1>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                <div class="cover_Sblog">
                  <img class="cover-parallax" src="../../assets/img/lldikti/semuapegawailagi.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Banner -->

        <section class="content-Sblog" data-sticky-container>
          <div class="container">
            <div class="row">
              <div class="col-lg-3">
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
              <div class="col-lg-8">
                <div class="body_content">
                   <h2>VISI DAN MISI
                    PPID LLDIKTI WILAYAH XI</h2>
                  <p class="margin-b-3">                    
                  <h3>  VISI </h3>
                    Terwujudnya pelayanan informasi yanng transparan dan akuntabel untuk memenuhi hak pemohon informasi sesuai dengan ketentuan peraturan perundang-undangan yang berlaku
                    
                  <h3>  MISI </h3>
                    1.	Menyediakan informasi publik yang akurat dan dapat dipertanggungjawabkan;
                    2.	Membangun dan mengembangkan sistem penyediaan dan layanan informasi;
                    3.	Meningkatkan pengelolaan informasi dan dokumentasi secara baik. Efesien, mudah diakses dan bersifat desentralisasi; dan
                    4.	Memanfaatkan teknologi informasi dalam memberikan layanan informasi publik kepada masyarakat dan mendukung pengelolaan keterbukaan informasi publik.
                    
                  </p>
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