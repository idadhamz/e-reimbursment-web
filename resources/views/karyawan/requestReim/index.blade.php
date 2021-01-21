@extends('layouts.master')

@section('content')
        <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-pencil-box"></i>
                </span> Request Reimbursement
              </h3>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="clearfix">
                      <h4 class="card-title float-left">Tabel Request Reimbursement</h4>
                      <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-right my-auto">
                        <a href="{{url('/requestReim/create')}}" class="btn btn-success btn-hapus-user" style="border-radius: 0px;border-width: 1.5px; padding: 10px 15px;"><i class="mdi mdi-plus menu-icon" style="margin-right: 5px;"></i>Request Reimbursement</a>
                      </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-md my-3">
                            <thead style="background-color: #078BB8;">
                                <tr>
                                    <th style="color: white;">Tanggal</th>
                                    <th style="color: white;">Subjek</th>
                                    <th style="color: white;">Total</th>
                                    <th style="color: white;">Status</th>
                                    <th style="color: white;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>19 Januari 2021</td>
                                    <td>Mengajukan Reim Uang Jalan Project PT. X</td>
                                    <td style="font-weight: bold;">Rp. 40.000</td>
                                    <td>
                                        <p>Persetujuan HR : <span style="color: green;">Disetujui</span></p>
                                        <p>Persetujuan Finance : <span style="color: green;">Disetujui</span></p>
                                        <p>Pengembalian Uang : <span style="color: green;">Disetujui</span></p>
                                    </td>
                                    <td>
                                        <a href="{{ url('requestReim/edit') }}" class="btn btn-warning" style="border-radius: 0px;border-width: 1.5px;">Edit</a>
                                        <a href="" class="btn btn-danger btn-hapus-user" style="border-radius: 0px;border-width: 1.5px;">Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>21 Januari 2021</td>
                                    <td>Reimbursement Uang Makan Di Kantor</td>
                                    <td style="font-weight: bold;">Rp. 50.000</td>
                                    <td>
                                        <p>Persetujuan HR : <span style="color: green;">Disetujui</span></p>
                                        <p>Persetujuan Finance : <span style="color: green;">Disetujui</span></p>
                                        <p>Pengembalian Uang : <span style="color: gray;">Menunggu</span></p>
                                    </td>
                                    <td>
                                        <a href="{{ url('requestReim/edit') }}" class="btn btn-warning" style="border-radius: 0px;border-width: 1.5px;">Edit</a>
                                        <a href="" class="btn btn-danger btn-hapus-user" style="border-radius: 0px;border-width: 1.5px;">Hapus</a>
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