@extends('layouts.master')

@section('content')
        <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-pencil-box"></i>
                </span> Pengembalian Dana
              </h3>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="clearfix">
                      <h4 class="card-title float-left">Tabel Pengembalian Dana</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-md my-3">
                            <thead style="background-color: #078BB8;">
                                <tr>
                                    <th style="color: white;">Tanggal</th>
                                    <th style="color: white;">Subjek</th>
                                    <th style="color: white;">Status</th>
                                    <th style="color: white;">Total</th>
                                    <th style="color: white;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>19 Januari 2021</td>
                                    <td>Mengajukan Reim Uang Jalan Project PT. X</td>
                                    <td style="font-weight: bold;">Rp. 40.000</td>
                                    <td>
                                        <p>Verifikasi Finance <span style="color: green;">Disetujui</span></p>
                                    </td>
                                    <td>
                                        <a href="{{ url('pengembalianDana/create') }}" class="btn btn-success" style="border-radius: 0px;border-width: 1.5px;">Buat</a>
                                        <a href="{{ url('pengembalianDana/create') }}" class="btn btn-success disabled" style="border-radius: 0px;border-width: 1.5px;">Cetak Bukti</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection