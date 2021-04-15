<div>
    <div class="modal fade" id="simpanKelas">
        <div class="modal-dialog">
            <div class="modal-content bg-primary">
                <div class="modal-header">
                    <h4 class="modal-title">Kelas Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    @livewire('kelas-form')
                </div>
                {{-- <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-outline-light">Save changes</button>
                </div> --}}
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <div class="modal fade" id="hapusKelas">
        <div class="modal-dialog modal-sm">
            <div class="modal-content bg-danger">
                <div class="modal-header">
                    <h4 class="modal-title">Hapus Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Yakin Untuk Hapus ?</p>
                </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary" wire:click='hapus'>Hapus</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <div class="conteiner">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Kelas</h3>
                        </div>
                        <div class="card-body">
                            <div class="p-0 card-body table-responsive">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#simpanKelas">
                                    <i class="fas fa-user-plus"></i>
                                </button>
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Kelas</th>
                                            <th>Kompetensi Keahlian</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kelas as $key)
                                            <tr>
                                                <td>{{$key->nama_kelas}}</td>
                                                <td>{{$key->kompetensi_keahlian}}</td>
                                                <td>
                                                    <button wire:click="selectedItem({{$key->id}},'update')" class='btn btn-info'><i class="fas fa-marker"></i></button>
                                                    <button wire:click="selectedItem({{$key->id}},'hapus')" class='btn btn-danger'><i class="fas fa-calendar-times"></i></button>
                                                </td>
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
             