<?= $this->extend('admin/use/layout/MainLayout') ?>

<?= $this->section('content') ?>

<div class="page-body">
    <div class="container-fluid">
    <div class="page-title">
        <div class="row">
        <div class="col-6">
            <h3>Pengepul</h3>
        </div>
        <div class="col-6">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">                                       <i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">Jawaban</li>
            <li class="breadcrumb-item active">Pengepul</li>
            </ol>
        </div>
        </div>
    </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
    <div class="row">
        <!-- Add rows  Starts-->
        <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <button class="btn btn-primary mb-3" id="addRow">Cetak</button>
                <div class="card-block row">
                    <div class="col-sm-12 col-lg-12 col-xl-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">id</th>
                                    <th scope="col">Jawaban1</th>
                                    <th scope="col">Jawaban2</th>
                                    <th scope="col">Jawaban3</th>
                                    <th scope="col">Jawaban4</th>
                                    <th scope="col">Jawaban5</th>
                                    <th scope="col">Jawaban6</th>
                                    <th scope="col">Jawaban7</th>
                                    <th scope="col">Jawaban8</th>
                                    <th scope="col">Jawaban9</th>
                                    <th scope="col">Jawaban10</th>
                                    <th scope="col">Tanggal</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Add rows Ends-->

    </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
<?= $this->endSection() ?>