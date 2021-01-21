@extends('layouts.master')

@section('content')
        <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-pencil-box"></i>
                </span> Edit Request Reimbursement
              </h3>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="clearfix">
                      <h4 class="card-title float-left">Data Utama</h4>
                      <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-right"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" value="Andrew Adam" readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="tgl_reim">Tanggal</label>
                                <input type="text" class="form-control" id="tgl_reim" value="19 Januari 2021" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="subjek">Subjek</label>
                                <input type="text" class="form-control" id="subjek" value="Mengajukan Reim Uang Jalan Project PT. X">
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="clearfix">
                      <h4 class="card-title float-left">Data Detail</h4>
                      <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-right"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nama">Kategori</label>
                                <select class="form-control" id="kategori">
                                    <option value="tr" selected>Transport</option>
                                    <option value="kon">Konsumsi</option>
                                    <option value="atk">ATK</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="bukti">Upload Bukti</label>
                                <input type="file" class="form-control" id="bukti">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="biaya">Jumlah Biaya</label>
                                <input type="number" class="form-control" id="biaya" value="25000">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="biaya">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi">Pengisian bensin pertalite perjalanan dari cililitan ke pondok ranji</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success" style="width: 100%;">Tambah Data</button>
                        </div>
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-md my-3">
                                    <thead style="background-color: #078BB8;">
                                        <tr>
                                            <th style="color: white;">Kategori</th>
                                            <th style="color: white;">Bukti</th>
                                            <th style="color: white;">Jumlah Biaya</th>
                                            <th style="color: white;">Deskripsi</th>
                                            <th style="color: white;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Transport</td>
                                            <td>
                                                <img src="{{ asset('assets/images/img-bukti/bukti-1.png')}}" alt="bukti-1" style="width: 125px; height: 125px; border-radius: 0;" />
                                            </td>
                                            <td>
                                                <span style="font-weight: bold;">Rp. 25.000</span>
                                            </td>
                                            <td>
                                            Pengisian bensin pertalite perjalanan dari cililitan ke pondok ranji
                                            </td>
                                            <td>
                                                <a href="" style="border-radius: 0px;border-width: 1.5px;"><i class="mdi mdi-close-circle" style="font-size: 28px; color: red;"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Konsumsi</td>
                                            <td>
                                                <img src="{{ asset('assets/images/img-bukti/bukti-2.png')}}" alt="bukti-2" style="width: 125px; height: 125px; border-radius: 0;" />
                                            </td>
                                            <td>
                                                <span style="font-weight: bold;">Rp. 15.000</span>
                                            </td>
                                            <td>
                                            Makan siang di warung tegal dengan total 15.000
                                            </td>
                                            <td>
                                                <a href="" style="border-radius: 0px;border-width: 1.5px;"><i class="mdi mdi-close-circle" style="font-size: 28px; color: red;"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group float-right">
                                <input type="number" class="form-control" id="total" value="40000" readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <a href="{{url('/requestReim')}}" class="btn btn-warning" style="width: 100%;">Batal</a>
                        </div>
                        <div class="col-md-9">
                            <a href="{{url('/requestReim')}}" class="btn btn-success" style="width: 100%;">Simpan Data</a>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection