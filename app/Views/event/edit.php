<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>EvOg App | Edit Event</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Event</h2>
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Form Add Event
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Basic Form Examples</h3>
                                <form role="form" action="<?= site_url('event/update/' . $event['id_event']) ?>" method="POST">
                                    <div class="form-group">
                                        <label>Nama Event</label>
                                        <input type="text" class="form-control" name="nama_event" value="<?= $event['nama_event'] ?>" placeholder="Insert Event Name" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Event</label>
                                        <input type="date" name="tgl_event" value="<?= $event['tgl_event'] ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Info Event</label>
                                        <textarea class="form-control" name="info_event" rows="3" placeholder="add some information" required><?= $event['info_event'] ?></textarea>
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