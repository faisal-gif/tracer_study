@extends('layouts.lay')
@section('content')
<div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Biodata Alumni</h4>
                  <form class="form-sample" method="POST" action="/proAlumni" enctype="multipart/form-data">
                    @csrf
                    <p class="card-description">
                    Data Diri
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">NIM</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="nim"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">No HP</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" name="noHp" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Kota Lahir</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="kotaLahir" />
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="jk">
                              <option>Laki-laki</option>
                              <option>Perempuan</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                          <div class="col-sm-9">
                            <input class="form-control" placeholder="yyyy-mm-dd" name="tanggalLahir"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Prodi</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="prodi">
                              <option>Manajemen Informatika</option>
                              <option>Teknik Informatika</option>

                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tahun Lulus</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="tahunLulus">
                              <option>2012</option>
                              <option>2011</option>

                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="email" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="card-description">
                    Domisili
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Alamat</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="alamat" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Kode Pos</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="kodePos" />
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Provinsi</label>
                          <div class="col-sm-9">
                          <select class="form-control" name="provinsi">
                              <option>Jawa Timur</option>
                              <option>Jawa Barat</option>
                              <option> DKI Jakarta</option>
                              <option>Kalimantan Selatan</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Kota / Kabupaten</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="kota">
                              <option>Malang</option>
                              <option>Madiun</option>
                              <option>Surabaya</option>
                              <option>Blitar</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <p class="card-description">
                    Pekerjaan
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Pekerjaan</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="pekerjaan" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Jenis Pekerajaan</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="jp" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nama Perusahaan</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="namaPerusahaan" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Alamat Perusahaan</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="alamatPerusahaan" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Save</button>
                  </form>
                </div>
              </div>
            </div>
            
@endsection