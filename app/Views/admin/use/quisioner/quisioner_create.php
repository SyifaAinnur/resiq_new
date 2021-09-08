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
                        <div class="form theme-form">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label>Pertanyaan</label>
                                        <input class="form-control" type="text" placeholder="Masukkan Pertanyaan">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label>Tipe Jawaban</label>
                                        <select class="form-select" id="seeAnotherField">
                                            <option value="select">Pilih Tipe Jawaban</option>
                                            <option value="no">Jawaban Singkat</option>
                                            <option value="yes">Dropdown</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <div class="form-group" id="otherFieldDiv">
                                            <label for="otherField">Option 1</label>
                                            <input class="form-control" type="text" id="otherField" placeholder="Masukkan Pilhan 1">
                                            <label for="otherField">Option 2</label>
                                            <input class="form-control" type="text" id="otherField" placeholder="Masukkan Pilhan 2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label>Ukuran</label>
                                        <select class="form-select">
                                            <option>Small</option>
                                            <option>Medium</option>
                                            <option>Big</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label>Tanggal Setor</label>
                                        <input class="datepicker-here form-control" type="text" data-language="en">
                                    </div>
                                </div>
                                 <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label>Ending date</label>
                                        <input class="datepicker-here form-control" type="text" data-language="en">
                                    </div>
                                </div> 
                            </div> -->
                            <div class="row">
                                <div class="col">
                                    <div><a class="btn btn-success me-3" href="#">Add</a><a class="btn btn-danger" href="#">Cancel</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>