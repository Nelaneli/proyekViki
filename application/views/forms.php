        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Produk
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url(); ?>index.php/Admin/home">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Produk
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3">

                        <form role="form" method="POST" enctype="multipart/form-data" action="<?php echo base_url();?>index.php/Admin/add_produk/" >

                            <div class="form-group">
                                <label>Nama Produk</label>
                                <input type="text" name="nama" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                <input type="file">
                            </div>

                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea class="form-control" rows="3" name="des"></textarea>
                            </div>
                            
                            <label>Harga</label>
                            <div class="form-group input-group">
                                <span class="input-group-addon">Rp</span>
                                <input type="number" class="form-control" name="hrg" required>
                                <span class="input-group-addon">.00</span>
                            </div>

                           
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <button type="reset" class="btn btn-info">Reset</button>

                        </form>

                    </div>
                    <div class="col-lg-9">
                        <h2>Daftar Produk</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Produk</th>
                                        <th>Harga</th>
                                        <th>Deskripsi</th>
                                        <th>Tindak Lanjut</th>
                                    </tr>
                                </thead>
                                <?php foreach ($p as $produk) { ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $produk->nama_produk; ?>. </td>
                                        <td><?php echo $produk->hrg_produk; ?></td>
                                        <td><?php echo $produk->desk_produk; ?> </td>
                                        <td><a href="<?php echo base_url();?>index.php/Admin/delete_produk/<?php echo $produk->id_produk;?>" type="button" class="btn btn-danger">Hapus</a>	</td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
