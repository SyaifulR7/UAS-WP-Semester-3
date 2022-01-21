<div class="card">
    <div class="card-body">
        <p>ID : <?php echo $this->session->userdata("username") ?> </p>
        <p>Nama Lengkap : <?php echo $this->session->userdata("nama_lengkap") ?> </p>
        <p>Alamat : <?php echo $this->session->userdata("alamat") ?> </p>
        <p>Nomor Telfon : <?php echo $this->session->userdata("phone") ?> </p>
    </div>
</div>