<div class="row">
    <div class="col-sm-6 mx-auto">
        <div class="card">
            <form method="post" action="<?php echo base_url('admin/store'); ?>">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Masukan Nmaa Lengkap">
                    </div>
                    <div class="form-group">
                        <label for="">Status</label>
                        <select class="form-control" name="status" id="status" placeholder="">
                            <option>Admin</option>
                            <option>User</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukan Alamat">
                    </div>

                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="number" class="form-control" name="phone" id="phone" placeholder="Masukan Nomor Telepon">
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Masukan Username">
                    </div>

                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Masukan Password">
                    </div>
                    <button class="btn btn-primary btn-md">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>