<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Laporan</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <input type="text" class="form-control" wire:model='nisn' placeholder="Enter NISN">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" wire:model='tahun' placeholder="Enter tahun">
                            </div>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-info text-white-50" wire:click='laporan'>proses</button>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                            <a href="/laporan/pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
                            </div>
                        </div><br>
                        <div class="p-0 card-body table-responsive">
                            <hr>
                            <table class="table table-bordered table-hover text-nowrap mb-5">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NISN</th>
                                        <th>NIS</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>SPP</th>
                                        <th>Tahun</th>
                                        <th>Bulan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=1 @endphp
                                    @foreach ($pembayaran as $key)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{$key->nisn}}</td>
                                        <td>{{$key->nis}}</td>
                                        <td>{{$key->nama}}</td>
                                        <td>{{$key->nama_kelas}}</td>
                                        <td>{{$key->nominal}}</td>
                                        <td>{{$key->tahun_dibayar}}</td>
                                        <td>{{$key->bulan_dibayar}}</td>
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
</div>