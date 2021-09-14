<?= $this->extend('admin/use/layout/MainLayout') ?>

<?= $this->section('content') ?>

<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>
                        Quisioner List</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Quisioner List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row project-cards">
            <div class="col-md-12 project-list">
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
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab" href="#top-home" role="tab" aria-controls="top-home" aria-selected="true"><i data-feather="target"></i>All</a></li>
                                <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false"><i data-feather="info"></i>Doing</a></li>
                                <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><i data-feather="check-circle"></i>Done</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div class="text-end">
                                <div class="form-group mb-0 me-0"></div><a class="btn btn-primary" href="<?= base_url('admin/quisioner/add'); ?>"> <i data-feather="plus-square"> </i>Create New Project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content" id="top-tabContent">
                            <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-block row">
                                            <div class="col-sm-12 col-lg-12 col-xl-12">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Soal</th>
                                                                <th scope="col">Tipe Jawaban</th>
                                                                <th scope="col">Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                            $no = 1;
                                                            foreach($questionMaster as $question) : ?>
                                                            <tr>
                                                                <th><?= $no; ?></th>
                                                                <td><?= $question['question']; ?></td>
                                                                <td><?= $question['namaTipe']; ?></td>
                                                                <td>
                                                                    <button type='button' class='btn btn-danger'>
                                                                        <a href="#" style="color:white;">Hapus</a>
                                                                    </button>
                                                                    <button type='button' class='btn btn-success' >
                                                                        <a href="<?= base_url('admin/quisioner/edit'); ?>" style="color:white;">Edit</a>
                                                                    </button>
                                                                    <!-- <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                        Tampilkan
                                                                    </button> -->
                                                                </td>
                                                            </tr>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Tampilkan Quisioner</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h5 class="" id="exampleModalLabel">Pilih halaman untuk menampilka quisioner</h5>
                                                            <div class="col-sm-4">
                                                                <div class="mb-3">
                                                                    <select class="form-select" name="tipe" id="seeAnotherField" required>
                                                                        <option value="">Pilih Halaman</option>
                                                                        <option >Rumah Tangga</option>
                                                                        <option >Pengepul</option>
                                                                        <option >Pengemis</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <!-- Container-fluid Ends-->
</div>
<?= $this->endSection() ?>