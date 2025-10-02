@extends('template')

@section('content')
      <!-- Stat main -->
      <main data-spy="scroll" data-target="#navbar-example2" data-offset="0">
        <!-- Start Banner Section -->
        <section class="demo_1 banner_section banner_demo7">
          <div class="container">
            <div class="row">
              
              <div class="col-md-12">
                <img class="ill_05" style="border-radius: 12px" src="../../assets/img/lldikti/bannerppid.png" />
              </div>
            </div>
          </div>
        </section>
        <!-- End Banner -->

        <!-- Start About -->
        <section class="abo_company">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 emo mb-6 mb-lg-0">
                <div class="gq_item ill_item">
                  <span class="d-block c-white font-s-16">Daftar Informasi Publik</span>
                  <img class="img-fluid ill_sec" src="../../assets/img/lldikti/berkala.png" />
                  <div class="title_sections">
                    <h2 class="c-white">Daftar Informasi Publik</h2>
                    <a href=/daftar-informasi-publik class="btn btn_lg_primary border-0 sweep_letter sweep_top bg-white c-black rounded-pill">
                  <div class="inside_item">
                    <span data-hover="Klik Disi">Lihat Informasi</span>
                  </div>
                </a>
                    </div>
                </div>
              </div>
              <div class="col-lg-4 emo mb-6 mb-lg-0">
                <div class="gq_item ill_item">
                  <span class="d-block c-black font-s-16">Form Permohonan Informasi Publik</span>
                  <img class="img-fluid ill_sec" src="../../assets/img/lldikti/form.png" />
                  <div class="title_sections">
                    <h2 class="c-black">Form Permohonan Informasi Publik</h2>
                    <a href="/form-ajuan" class="btn btn_lg_primary border-0 sweep_letter sweep_top bg-white c-black rounded-pill">
                      <div class="inside_item">
                      <span data-hover="Klik Disi">Ajukan Permohonan Disini</span>
                    </div>
                  </a>
                     </div>
                </div>
              </div>
              <div class="col-lg-4 emo mb-6 mb-lg-0">
                <div class="gq_item ill_item">
                  <span class="d-block c-black font-s-16">Lacak Permohonan Informasi</span>
                  <img class="img-fluid ill_sec" src="../../assets/img/lldikti/ajuan.png" />
                  <div class="title_sections">
                    <h2 class="c-black">Lacak Permohonan Informasi</h2>
                    <a href="/informasi-setiap-saat" class="btn btn_lg_primary border-0 sweep_letter sweep_top bg-white c-black rounded-pill">
                  <div class="inside_item">
                    <span data-hover="Klik Disi">Lacak Disini</span>
                  </div>
                </a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End. About -->

        <!-- Start Services -->
        <section class="products_section product_demo2 features_hosting service_demo3 margin-t-8 padding-t-10"
          id="Services">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 margin-b-3">
                <div class="title_sections mb-0">
                  <div class="before_title">
                    <span>Apa itu</span>
                    <span class="c-blue">PPID ?</span>
                  </div>
                  <h2>PPID adalah Pejabat Pengelola Informasi dan Dokumentasi</h2>
                  <p>
                   di wilayah Lembaga Layanan Pendidikan Tinggi Wilayah XI sesuai dengan Peraturan Menteri Kemdikbudristek Nomor 69 Tahun 2024 bertugas untuk menyediakan dan mengkoordinir informasi publik secara transparan dan akuntabel kepada masyarakat. 
                  </p>
                </div>
              </div>
              <div class="col-lg-7 ml-sm-auto">
                <div class="row">
                  <div class="col-md-6 item pr-sm-5 mb-3 mb-sm-5">
                    <div class="item_pro" data-aos="fade-up" data-aos-delay="0">
                      <div class="icon_t">
                        <img src="../../assets/img/icons/Employee.svg" />
                      </div>
                      <h3>Informasi Publik Berkala</h3>
                      <a href="/informasi-berkala"
                  class="btn btn_sm_primary border-0 sweep_letter sweep_top bg-blue c-white rounded-pill">
                  <div class="inside_item">
                    <span data-hover="Klik Disi">Lihat Informasi</span>
                  </div>
                </a>
                    </div>
                  </div>
                  <div class="col-md-6 item pr-sm-5 mb-3 mb-sm-5">
                    <div class="item_pro" data-aos="fade-up" data-aos-delay="100">
                      <div class="icon_t">
                        <img src="../../assets/img/icons/Binocular.svg" />
                      </div>
                      <h3>Informasi Publik Serta Merta</h3>
                      <a href="/informasi-serta-merta"
                  class="btn btn_sm_primary border-0 sweep_letter sweep_top bg-blue c-white rounded-pill">
                  <div class="inside_item">
                    <span data-hover="Klik Disi">Lihat Informasi</span>
                  </div>
                </a>
                    </div>
                  </div>
                  <div class="col-md-6 item pr-sm-5 mb-3 mb-sm-5">
                    <div class="item_pro" data-aos="fade-up" data-aos-delay="200">
                      <div class="icon_t">
                        <img src="../../assets/img/icons/Shield-check.svg" />
                      </div>
                      <h3>Informasi Publik Tersedia Setiap Saat</h3>
                      <a href="/informasi-setiap-saat"
                  class="btn btn_sm_primary border-0 sweep_letter sweep_top bg-blue c-white rounded-pill">
                  <div class="inside_item">
                    <span data-hover="Klik Disi">Lihat Informasi</span>
                  </div>
                </a>
                    </div>
                  </div>
                  <div class="col-md-6 item pr-sm-5">
                    <div class="item_pro" data-aos="fade-up" data-aos-delay="300">
                      <div class="icon_t">
                        <img src="../../assets/img/icons/Door-open.svg" />
                      </div>
                      <h3>Informasi Publik di Kecualikan</h3>
                      <a href="/informasi-dikecualikan"
                  class="btn btn_sm_primary border-0 sweep_letter sweep_top bg-blue c-white rounded-pill">
                  <div class="inside_item">
                    <span data-hover="Klik Disi">Lihat Informasi</span>
                  </div>
                </a>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <!-- .container -->
        </section>
        <!-- End. Services -->

        <!-- Section form 
        <section class="services_section save__nature margin-t-8">
          <div class="container">
            <div class="row justify-content-center text-center">
              <div class="col-md-6 col-lg-5">
                <div class="title_sections">
                  <div class="before_title">
                    <span>Form Permohonan</span>
                    <span class="c-blue">PPID </span>
                  </div>
                  <h2>Silahkan Ajukan Permohonan</h2>
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 item__nature active">
                <div class="items_serv sevice_block text-center" data-aos="fade-up" data-aos-delay="0">
                  <div class="icon--top">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23.39" height="17.026" viewBox="0 0 23.39 17.026">
                      <g id="money" transform="translate(0.195 -3.487)">
                        <path id="Combined-Shape-Copy"
                          d="M2,6H21a1,1,0,0,1,1,1V17a1,1,0,0,1-1,1H2a1,1,0,0,1-1-1V7A1,1,0,0,1,2,6Zm9.5,10a4,4,0,1,0-4-4A4,4,0,0,0,11.5,16Z"
                          transf orm="matrix(0.966, 0.259, -0.259, 0.966, 3.498, -2.567)" fill-rule="evenodd"
                          opacity="0.3" />
                        <path id="Combined-Shape"
                          d="M2,6H21a1,1,0,0,1,1,1V17a1,1,0,0,1-1,1H2a1,1,0,0,1-1-1V7A1,1,0,0,1,2,6Zm9.5,10a4,4,0,1,0-4-4A4,4,0,0,0,11.5,16Zm0-2a2,2,0,1,0-2-2A2,2,0,0,0,11.5,14Z"
                          fill-rule="evenodd" />
                      </g>
                    </svg>
                  </div>
                  <div class="txt">
                    <h3>Form Permohonan Informasi</h3>
                    
                  </div>
                  <a href="/form-ajuan" class="btn btn_md_primary sweep_top sweep_letter btn__link rounded-pill">
                    <div class="inside_item">
                      <span data-hover="Klik Disini">Klik Disini</span>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 item__nature active">
                <div class="items_serv sevice_block text-center" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon--top">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21.575" height="21.574" viewBox="0 0 21.575 21.574">
                      <g id="Group_6278" data-name="Group 6278" transform="translate(-3.596 -3.596)">
                        <path id="Mask"
                          d="M12.794,12.589a4.794,4.794,0,1,1,4.794-4.794A4.794,4.794,0,0,1,12.794,12.589Z"
                          transform="translate(1.588 0.596)" fill="#fff" opacity="0.3" />
                        <path id="Mask-Copy"
                          d="M3,21.629C3.465,15.908,8.108,13,13.768,13c5.739,0,10.454,2.749,10.8,8.63a.823.823,0,0,1-.9.959H3.872A1.327,1.327,0,0,1,3,21.629Z"
                          transform="translate(0.596 2.581)" fill="#fff" />
                      </g>
                    </svg>

                  </div>
                  <div class="txt">
                    <h3>Form Pengajuan Keberatan</h3>
                    
                  </div>
                  <a href="/form-keberatan" class="btn btn_md_primary sweep_top sweep_letter btn__link rounded-pill">
                    <div class="inside_item">
                      <span data-hover="Klik Disini">Klik Disini</span>
                    </div>
                  </a>
                </div>
              </div>Stat main 
              <div class="col-lg-6 item__nature active">
                <div class="items_serv sevice_block text-center" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon--top">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22.293" height="26.833" viewBox="0 0 22.293 26.833">
                      <g id="Group_6279" data-name="Group 6279" transform="translate(-3.094 -0.605)">
                        <path id="Path-36-Copy-2" d="M3.647,17.894Q-3.647,5.674,3.647,0,10.643,5.674,3.647,17.894Z"
                          transform="translate(18.229 16.103) rotate(150)" fill="#fff" fill-rule="evenodd"
                          opacity="0.3" />
                        <path id="Path-36-Copy-3" d="M3.647,0q-7.294,12.22,0,17.894Q10.643,12.22,3.647,0Z"
                          transform="translate(19.199 0.605) rotate(30)" fill="#fff" fill-rule="evenodd"
                          opacity="0.3" />
                        <path id="Path-36" d="M12.59,1q-7.294,12.22,0,17.894Q19.586,13.22,12.59,1Z"
                          transform="translate(1.726 0.193)" fill="#fff" fill-rule="evenodd" opacity="0.3" />
                        <path id="Rectangle-71"
                          d="M6.537,13H20.032a1.193,1.193,0,0,1,1.143,1.536l-2.608,8.693a2.386,2.386,0,0,1-2.285,1.7H10.288A2.386,2.386,0,0,1,8,23.229L5.394,14.536A1.193,1.193,0,0,1,6.537,13Z"
                          transform="translate(1.031 2.509)" fill="#fff" fill-rule="evenodd" />
                      </g>
                    </svg>

                  </div>
                  <div class="txt">
                    <h3>Lacak Permohonan</h3>
                   
                  </div>
                  <a href="#" class="btn btn_md_primary sweep_top sweep_letter btn__link rounded-pill">
                    <div class="inside_item">
                      <span data-hover="Klik Disini">Klik Disini</span>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section> 
         End. form -->
        
        <!-- Start Agency About -->
        <section class="about_agency padding-t-12" id="About">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <div class="title_sections mb-0">
        
                  <h1>" Keterbukaan Informasi Publik adalah Hak Asasi Setiap Warga Negara "</h2><hr>
                  <h6>
                    Oleh karenanya Lembaga Layanan Pendidikan Tinggi Wilayah XI berkomitmen untuk mendukung 
                    Keterbukaan Informasi Publik yang transparan dan akuntabel sehingga dapat 
                    mendorong partisipasi masyarakat untuk terlibat dalam pembangunan negara 
                  </h6>
  
                  <img class="inside_pic" src="../../assets/img/lldikti/lldikti11gedung.jpg" />
                  <img class="inside_pic2" src="../../assets/img/lldikti/banbawahhd.png" />
                </div>
              </div>
              <div class="col-lg-6 ml-auto">
                <div class="pro_agency">
                  <img src="../../assets/img/lldikti/kepalall11.png" />
                </div>
              </div>
            </div>
            
          </div>
        </section>
        <!-- Edn. Agency About -->


        <!-- Start Statistic -->
        <section class="margin-t-12 section_state" id="Statistic">
          <!-- particle background -->
          <div id="particles-js"></div>
          <div class="container">
            <div id="triggerBlur"></div>
            <div class="row justify-content-center text-center">
              <div class="col-md-5">
                <div class="title_sections">
                  
                  <h2>Statistik Permohonan Informasi</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="bb_qgency_state">
                  <div class="number_state">
                    <div class="txt">
                      0
                    </div>
                  </div>
                  <div class="blur_item"></div>
                  <div class="content_state">
                    <div class="row justify-content-md-center">
                      <div class="col-md-2">
                        <div class="it__em">
                          <div class="icon">
                            <img src="../../assets/img/icons/1f469.png" />
                          </div>
                          <div class="info_txt">
                            <h4>0</h4>
                            <p>
                              Permohonan Informasi Diajukan
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="it__em">
                          <div class="icon">
                            <img src="../../assets/img/icons/2665.png" />
                          </div>
                          <div class="info_txt">
                            <h4>0</h4>
                            <p>
                              Permohonan Informasi Dikabulkan
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="it__em">
                          <div class="icon">
                            <img src="../../assets/img/icons/1f58c.png" />
                          </div>
                          <div class="info_txt">
                            <h4>0</h4>
                            <p>
                              Permohonan Informasi diTolak
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="users_profile">
                    <img src="../../assets/img/persons/02.png" />
                    <img src="../../assets/img/persons/01.png" />
                    <img src="../../assets/img/persons/15.png" />
                    <img src="../../assets/img/persons/04.png" />
                    <img src="../../assets/img/persons/03.png" />
                    <img src="../../assets/img/persons/05.png" />
                    <img src="../../assets/img/persons/16.png" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End. Statistic -->

      </main>
      <!-- end main -->
    </div>
    <!-- [id] content -->
@endsection