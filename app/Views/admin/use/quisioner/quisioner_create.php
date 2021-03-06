<?= $this->extend('admin/use/layout/MainLayout') ?>

<?= $this->section('content') ?>

<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>
                        Quisioner</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Apps</li>
                        <li class="breadcrumb-item active">Input Pertanyaan </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form theme-form">
                                <?php
                                $inputs = session()->getFlashdata('inputs');
                                $errors = session()->getFlashdata('errors');
                                $error = session()->getFlashdata('error');
                                $success = session()->getFlashdata('success');
                                if (!empty($errors)) { ?>
                                    <div class="alert alert-danger" role="alert">
                                        <ul>
                                            <?php foreach ($errors as $errors) : ?>
                                                <li><?= esc($errors) ?></li>
                                            <?php endforeach ?>
                                        </ul>
                                    </div>
                                <?php
                                }
                                if (!empty($error)) { ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= esc($error) ?><br />
                                    </div>
                                <?php }
                                if (!empty($success)) { ?>
                                    <div class="alert alert-success" role="alert">
                                        <?= esc($success) ?><br />
                                    </div>
                                <?php } ?>
                                <?= csrf_field() ?>
                                <div class="col-sm-12">
                                    <h5>Pilih Quisioner</h5>
                                </div>
                                <div class="col">
                                    <div class="m-t-15 m-checkbox-inline custom-radio-ml">
                                        <div class="form-check radio radio-primary">
                                            <input class="form-check-input" id="radio11" type="radio" name="UJenis" value="3">
                                            <label class="form-check-label" for="radio11">Rumah Tangga</label>
                                        </div>
                                        <div class="form-check radio radio-secondary">
                                            <input class="form-check-input" id="radio22" type="radio" name="UJenis" value="4">
                                            <label class="form-check-label" for="radio22">Pengepul</label>
                                        </div>
                                        <div class="form-check radio radio-success">
                                            <input class="form-check-input" id="radio55" type="radio" name="UJenis" value="5">
                                            <label class="form-check-label" for="radio55">Pemulung</label>
                                        </div>
                                    </div>
                                </div>
                                </br>
                                </br>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label>Pertanyaan</label>
                                            <input class="form-control" name="pertanyaan" type="text" placeholder="Masukkan Pertanyaan" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label>Tipe Jawaban</label>
                                            <select class="form-select" name="tipe" id="seeAnotherField" required>
                                                <option value="">Pilih Tipe Jawaban</option>
                                                <option value="Jawaban Singkat">Jawaban Singkat</option>
                                                <option value="Dropdown">Dropdown</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <div class="form-group" id="otherFieldDiv">
                                                <label for="otherField">Option</label>
                                                <input class="form-control" type="text" name="option" id="otherField" placeholder="Pisahkan dengan koma">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div><button type="submit" class="btn btn-success me-3">Add</button><a class="btn btn-danger" href="<?= base_url("admin/quisioner"); ?>">Cancel</a></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>