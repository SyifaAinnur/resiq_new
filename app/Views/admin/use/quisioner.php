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
                      <li class="breadcrumb-item active">Project List</li>
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
              <div class="card-body">
                <div class="table-responsive product-table">
                  <table class="display" id="basic-1">
                    <thead>
                      <tr>
                        <th>Image</th>
                        <th>Details</th>
                        <th>Amount</th>
                        <th>Stock</th>
                        <th>Start date</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><img src="../assets/images/ecommerce/product-table-1.png" alt=""></td>
                        <td>
                          <h6> Red Lipstick </h6><span>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</span>
                        </td>
                        <td>$10</td>
                        <td class="font-success">In Stock</td>
                        <td>2011/04/25</td>
                        <td>
                          <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                          <button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                        </td>
                      </tr>
                      <tr>
                        <td><img src="../assets/images/ecommerce/product-table-2.png" alt=""></td>
                        <td>
                          <h6> Pink Lipstick </h6>
                          <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                        </td>
                        <td>$10</td>
                        <td class="font-primary">Low Stock</td>
                        <td>2011/04/25</td>
                        <td>
                          <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                          <button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                        </td>
                      </tr>
                      <tr>
                        <td><img src="../assets/images/ecommerce/product-table-3.png" alt=""></td>
                        <td>
                          <h6> Gray Lipstick </h6>
                          <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                        </td>
                        <td>$10</td>
                        <td class="font-danger">out of stock</td>
                        <td>2011/04/25</td>
                        <td>
                          <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                          <button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                        </td>
                      </tr>
                      <tr>
                        <td><img src="../assets/images/ecommerce/product-table-4.png" alt=""></td>
                        <td>
                          <h6> Green Lipstick </h6>
                          <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                        </td>
                        <td>$10</td>
                        <td class="font-primary">Low Stock</td>
                        <td>2011/04/25</td>
                        <td>
                          <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                          <button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                        </td>
                      </tr>
                      <tr>
                        <td><img src="../assets/images/ecommerce/product-table-5.png" alt=""></td>
                        <td>
                          <h6> Black Lipstick </h6>
                          <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                        </td>
                        <td>$10</td>
                        <td class="font-success">In Stock</td>
                        <td>2011/04/25</td>
                        <td>
                          <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                          <button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                        </td>
                      </tr>
                      <tr>
                        <td><img src="../assets/images/ecommerce/product-table-6.png" alt=""></td>
                        <td>
                          <h6> White Lipstick </h6>
                          <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                        </td>
                        <td>$10</td>
                        <td class="font-primary">Low Stock</td>
                        <td>2011/04/25</td>
                        <td>
                          <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                          <button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                        </td>
                      </tr>
                      <tr>
                        <td><img src="../assets/images/ecommerce/product-table-1.png" alt=""></td>
                        <td>
                          <h6> light Lipstick </h6>
                          <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                        </td>
                        <td>$10</td>
                        <td class="font-danger">out of stock</td>
                        <td>2011/04/25</td>
                        <td>
                          <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                          <button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                        </td>
                      </tr>
                      <tr>
                        <td><img src="../assets/images/ecommerce/product-table-2.png" alt=""></td>
                        <td>
                          <h6> Gliter Lipstick </h6>
                          <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                        </td>
                        <td>$10</td>
                        <td class="font-danger">out of stock</td>
                        <td>2011/04/25</td>
                        <td>
                          <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                          <button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                        </td>
                      </tr>
                      <tr>
                        <td><img src="../assets/images/ecommerce/product-table-3.png" alt=""></td>
                        <td>
                          <h6> green Lipstick </h6>
                          <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                        </td>
                        <td>$10</td>
                        <td class="font-success">In Stock</td>
                        <td>2011/04/25</td>
                        <td>
                          <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                          <button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                        </td>
                      </tr>
                      <tr>
                        <td><img src="../assets/images/ecommerce/product-table-4.png" alt=""></td>
                        <td>
                          <h6> Yellow Lipstick </h6>
                          <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                        </td>
                        <td>$10</td>
                        <td class="font-danger">out of stock</td>
                        <td>2011/04/25</td>
                        <td>
                          <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                          <button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- Container-fluid Ends-->
          </div>
          <?= $this->endSection() ?>