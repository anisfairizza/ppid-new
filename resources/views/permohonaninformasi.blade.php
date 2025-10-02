@extends('templateadmin')

@section('content')

			<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Tables</a></li>
						<li class="breadcrumb-item active" aria-current="page">Data Table</li>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Data Table</h6>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Permohonan Informasi</th>
                        <th>Tujuan </th>
                        <th>Bentuk </th>
                        <th>Cara</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($informasi as $data )
                      <tr>
                        <td> {{$loop->iteration}}</td>
                        <td> {{ $data->nama }}</td>
                        <td> {{ $data->informasirincian }}</td>
                        <td> {{ $data->informasitujuan }}</td>
                        <th> {{ $data->informasibentuk }}</th>
                        <th> {{ $data->informasicara }}</th>
                        <td> <a type="button" href="{{ route('detail-permohonan', $data->id) }}" class="btn btn-primary btn-icon">
	                            <i data-feather="check-square"></i></a></td>
                      </tr>
                       @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
					</div>
				</div>

			</div>

@endsection