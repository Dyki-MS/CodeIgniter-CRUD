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

        <!--Form anyar -->
        <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" rol="alert">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>
        <div class="card mb-3">
            <div class="card-header">
                <a href="<?php echo site_url('admin/products/') ?>"><i class="fas fa-arrow-left"></i>Back</a>
            </div>
        <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
		<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
		oleh controller tempat vuew ini digunakan. Yakni index.php/admin/products/edit/ID --->
            <input type="hidden" name="id" value="<?php echo $product->product_id ?>" />
            <div class="form-group">
                <lable for="name">Name*</lable>
                 <input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
                  type="text" name="name" placeholder="Product name" value="<?php echo $product->name ?>"/>
                <div class="invalid-feedback">
                    <?Php echo form_error('name') ?>
                </div>
            </div>

            <div class="form-group">
                <lable for="price">Price</lable>
                <input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
                    type="number" name="price" min="0" placeholder="Product price" value="<?php echo $product->price ?>"/>
                    <div class="invalid-feedback">
                        <?Php echo form_error('price') ?>
                    </div>
            </div>

            <div class="form-group">
                <lable for="name">Photo</lable>
                <input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
                    type="file" name="image"/>
                    <input type="hidden" name="old_image" value="<?php echo $product->image ?>"/>
                    <div class="invalid-feedback">
                    <?Php echo form_error('image') ?>
                </div>
            </div>

            <div class="form-group">
                <lable for="name">Diskripsi*</lable>
                <textarea class="form-control <?php echo form_error('diskripsi') ? 'is-invalid':'' ?>"
                     name="diskripsi" placeholder="product diskripsi.."> <?php echo $product->diskripsi ?></textarea>
                    <div class="invalid-feedback">
                    <?Php echo form_error('diskripsi') ?>
                </div>
            </div>

            <input class="btn btn-success" type="submit" name="btn" value="Save" />
        </form>

        </div>
            <div class="card-footer small text-muted">
             * required field
            </div>

    </div>

      <?php $this->load->view("admin/_teamplate/footer.php") ?>
    </div>
  </div>
  <?php $this->load->view("admin/_teamplate/scroltop.php") ?>
  <?php $this->load->view("admin/_teamplate/modal.php") ?>
  <?php $this->load->view("admin/_teamplate/js.php") ?>
</body>
</html>
