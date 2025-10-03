@extends('template')

@section('content')
<main data-spy="scroll" data-target="#navbar-example2" data-offset="0">
  <!-- Start banner_about -->
  <section class="pt_banner_inner">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-md-8 col-lg-6">
          <div class="banner_title_inner margin-b-3">
            <h1 data-aos="fade-up" data-aos-delay="0">
             Daftar Informasi Publik
            </h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End banner_about -->

 <!-- Start Pricing -->
  <section class="pricing_section options_pricing pricing_demo2">
    <div class="container">
      <iframe src="{{ asset('assets/admin/fails/SKDIP2025.pdf') }}" 
        width="100%" height="600px"></iframe>
    </div>
  </section>
  <!-- End Start Pricing -->

</main>
    </div>
    <!-- [id] content -->
@endsection