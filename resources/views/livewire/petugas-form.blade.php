<div>
    <form role="form">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="formcontrol" id="exampleInputEmail1" placeholder="Enter username" wire:model="username">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="text" class="formcontrol" id="exampleInputPassword1" placeholder="Enter password" wire:model="password">
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