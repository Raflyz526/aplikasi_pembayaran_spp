<div>
    <form role="form">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kelas</label>
                        <input type="text" class="formcontrol" id="exampleInputEmail1" placeholder="Enter kelas" wire:model="nama_kelas">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Kompetensi Keahlian</label>
                        <input type="text" class="formcontrol" id="exampleInputPassword1" placeholder="Enter kompetensi keahlian" wire:model="kompetensi_keahlian">
                    </div>
                </div>
            </div>
            
            <!-- /.card-body -->
                <div class="card-footer" style="float:right;display:block;">
                    <button type="submit" class="btn btn-info" wire:click='simpan'>Submit</button>
                </div>
            </div>
        </form>
</div>