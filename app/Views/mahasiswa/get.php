<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>EvOg App | Events</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Events Page</h2>
                <h5>Welcome Jhon Deo , Love to see you back. </h5>
            </div>
        </div>

        <?php if (!empty(session()->getFlashdata('success'))) { ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success'); ?>
            </div>
        <?php } ?>
        <!-- /. ROW  -->
        <hr />

        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="<?= site_url('mahasiswa/add_mhs') ?>" class="btn btn-sm btn-primary">Add Data</a>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="tabelMahasiswa">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Mahasiswa</th>
                                        <th>Fakultas</th>
                                        <th>Jurusan</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($lists as $mhs) : ?>
                                        <tr class="odd gradeX">
                                            <td><?= $i++; ?></td>
                                            <td><?= $mhs['nama_mhs'] ?></td>
                                            <td><?= $mhs['nama_fakultas'] ?></td>
                                            <td><?= $mhs['nama_jurusan'] ?></td>
                                            <td><?= $mhs['alamat'] ?></td>
                                            <td>
                                                <a href="<?= site_url('mahasiswa/edit/' . $mhs['id_mahasiswa']) ?>" class="btn btn-sm btn-primary">Edit</a>
                                                <a href="<?= site_url('mahasiswa/delete/' . $mhs['id_mahasiswa']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this data?')">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!--End Advanced Tables -->
                <!-- /. PAGE INNER  -->
            </div>

        </div>


        <?= $this->endSection() ?>