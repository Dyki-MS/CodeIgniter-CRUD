<!DOCTYPE html>
<html lang="en">

<head>
 <?php $this->load->view("admin/_teamplate/head.php") ?>
</head>

<body id="page-top">
<?php $this->load->view("admin/_teamplate/navbar.php") ?>
<div id="wrapper">
<?php $this->load->view("admin/_teamplate/sidebar.php") ?> 
    <div id="content-wrapper">
      <div class="container-fluid">
        <?php $this->load->view("admin/_teamplate/breadcumb.php") ?>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
              <a href="<?php echo site_url('admin/products/add') ?>"><i class="fas fa-plus"></i>Add New</a>
          </div>
          <div class="card-body">

            <div class="table-responsive">
              <table class="table table-bordered  table-hover" id="dataTable" width="100%" cellspacing="0" >
                <thead>
                  <tr>
                    <th style="text-align: center;">Name</th>
                    <th style="text-align: center;">Price</th>
                    <th style="text-align: center;">Photo</th>
                    <th style="text-align: center;">Diskripsi</th>
                    <th style="text-align: center;">Action</th>
                  </tr>
                 <tfoot>
                  <tr>
                    <th style="text-align: center;">Name</th>
                    <th style="text-align: center;">Price</th>
                    <th style="text-align: center;">Photo</th>
                    <th style="text-align: center;">Diskripsi</th>
                    <th style="text-align: center;">Action</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php foreach ($products as $product): ?>
                  <tr>
                    <td width="150">
                    <?php echo $product->name ?>
                    </td>
                    <td>
                    <?php echo ("Rp. ") ?>
                    <?php echo $product->price ?>
                    </td>
                    <td style="text-align: center;">
                    <img src="<?php echo base_url('upload/product/'.$product->image) ?>" width="55"/>
                    </td>
                    <td class="small">
                    <?php echo substr($product->diskripsi, 0, 120) ?>...
                    </td>
                    <td width="130" style="text-align: center;">
                      <a href="<?php echo site_url('admin/products/edit/'.$product->product_id) ?>"
                      class="btn btn-small"><i class="fas fa-edit"></i></a>
                      <a onclick="deleteConfirm('<?php echo site_url('admin/products/delete/'.$product->product_id) ?>')"
                      href="#!" class="btn btn-smal text-danger"><i class="fas fa-trash"></i></a>
                      </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>
  <?php $this->load->view("admin/_teamplate/footer.php") ?>
    </div>
  </div>
  <?php $this->load->view("admin/_teamplate/scroltop.php") ?>
  <?php $this->load->view("admin/_teamplate/modal.php") ?>
  <?php $this->load->view("admin/_teamplate/js.php") ?>

  <script>
  function deleteConfirm(url){
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
  }
  </script>
</body>
</html>
