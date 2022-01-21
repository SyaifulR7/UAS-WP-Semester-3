<div class="row">
    <div class="col-sm-6 mx-auto">
        <?php if (!empty($this->session->flashdata('success'))) { ?>
            <div class="alert alert-success mb-2" role="alert">
                <?= $this->session->flashdata('success'); ?>
            </div>
        <?php } ?>
        <?php if (!empty($this->session->flashdata('error'))) { ?>
            <div class="alert alert-danger mb-2" role="alert">
                <?= $this->session->flashdata('error'); ?>
            </div>
        <?php } ?>
        <div class="card">
            <form method="post" action="<?php echo base_url('admin/update'); ?>">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Id user</label>
                        <input type="number" readonly class="form-control" value="<?= $edit->id_user; ?>" name="id_user" id="id_user" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label for="">Nama lengkap</label>
                        <input type="text" class="form-control" value="<?= $edit->nama_lengkap; ?>" name="nama_lengkap" id="nama_lengkap" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label for="">Status</label>
                        <select class="form-control" name="status" id="status" placeholder="">
                            <option>Admin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control" value="<?= $edit->alamat; ?>" name="alamat" id="alamat" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" class="form-control" value="<?= $edit->phone; ?>" name="phone" id="phone" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" readonly class="form-control" value="<?= $edit->username; ?>" name="username" id="username" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label for="">Password <small class="text-danger pl-2">* Opsional</small></label>
                        <input type="password" class="form-control" value="" name="password" id="password" placeholder="" />
                    </div>
                    <button class="btn btn-primary btn-md">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>