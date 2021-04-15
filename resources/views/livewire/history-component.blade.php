<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">History Pembayaran</h3>
                    </div>
                    <div class="card-body">
                        <div class="p-0 card-body table-responsive">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>NISN</th>
                                        <th>Bulan Dibayar</th>
                                        <th>Tahun Dibayar</th>
                                        <th>Jumlah Dibayar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pembayaran as $key)
                                        <tr>
                                            <td>{{$key->nisn}}</td>
                                            <td>{{$key->bulan_dibayar}}</td>
                                            <td>{{$key->tahun_dibayar}}</td>
                                            <td>{{$key->jumlah_dibayar}}</td>
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
             