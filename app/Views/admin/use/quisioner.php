<?= $this->extend('admin/use/layout/MainLayout') ?>

<?= $this->section('content') ?>

<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h3>
            Project List</h3>
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
    </div>
  </div>
  <!-- Container-fluid Ends-->
</div>
<?= $this->endSection() ?>