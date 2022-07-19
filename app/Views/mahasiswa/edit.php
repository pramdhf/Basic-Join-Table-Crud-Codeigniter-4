<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>EvOg App | Edit Mahasiswa</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Mahasiswa</h2>
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Form Add Event
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Basic Form Examples</h3>
                                <form role="form" action="<?= site_url('mahasiswa/update/' . $mhs['id_mahasiswa']) ?>" method="POST">
                                    <div class="form-group">
                                        <label>Nama Mahasiswa</label>
                                        <input type="text" class="form-control" name="nama_mhs" value="<?= $mhs['nama_mhs'] ?>" placeholder="Insert Event Name" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Fakultas</label>
                                        <select name="id_fakultas" id="" required>
                                            <option value="" hidden>Pilih Fakultas</option>
                                            <?php foreach ($fakultas as $key => $value) : ?>
                                                <option value="<?= $value['id_fakultas'] ?>"><?= $value['nama_fakultas'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Jurusan</label>
                                        <select name="id_jurusan" id="" required>
                                            <option value="" hidden>Pilih Jurusan</option>
                                            <?php foreach ($jurusan as $key => $value) : ?>
                                                <option value="<?= $value['id_jurusan'] ?>"><?= $value['nama_jurusan'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea class="form-control" name="alamat" rows="3" placeholder="add some information" required><?= $mhs['alamat'] ?></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>

                                </form>


                            </div>


                        </div>
                    </div>
                </div>
                <!-- End Form Elements -->
            </div>
        </div>
        <!-- /. ROW  -->
        <hr />

    </div>
    <!-- /. PAGE INNER  -->
</div>
<?= $this->endSection() ?>