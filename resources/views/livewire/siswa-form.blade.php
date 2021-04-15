<div>
    <form role="form">
        <div class="card-body">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="exampleInputEmail1">NISN</label>
                    <input type="text" class="formcontrol" id="exampleInputEmail1" placeholder="Enter nisn" wire:model="nisn">
                    </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="exampleInputPassword1">NIS</label>
                    <input type="text" class="formcontrol" id="exampleInputPassword1" placeholder="Enter nis" wire:model="nis">
                    </div>
            </div>
            </div>

            <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama Siswa</label>
                    <input type="text" class="formcontrol" id="exampleInputPassword1" placeholder="Enter nama siswa" wire:model="nama">
                    </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="exampleInputPassword1">kelas</label>
                    <select class="form-control" wire:model='kelas'>
                        <option >pilih</option>
                        @foreach ($idKelas as $idkelas )
                        <option value="{{$idkelas->id}}">{{$idkelas->nama_kelas}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            </div>

            <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <textarea class="form-control" rows="3" placeholder="Enter alamat..." wire:model="alamat"></textarea>
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Telepon</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter telepon" wire:model='telepon'>
                    </div>
                </div>
            </div>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">SPP</label>
                <select class="form-control" wire:model='spp'>
                    <option >pilih</option>
                    @foreach ($idSpp as $idspp )
                    <option value="{{$idspp->id}}">{{$idspp->nominal}}</option>
                    @endforeach
                </select>
            </div>
        </div>
             <!-- /.card-body -->
            <div class="card-footer" style="float:right;display:block;">
                <button type="submit" class="btn btn-info" wire:click='simpan'>Submit</button>
            </div>
        </form>
</div>