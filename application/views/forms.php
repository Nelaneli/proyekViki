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
                    <div class="col-lg-6">

                        <form role="form">

                            <div class="form-group">
                                <label>Nama Produk</label>
                                <input class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                <input type="file">
                            </div>

                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            
                            <label>Harga</label>
                            <div class="form-group input-group">
                                <span class="input-group-addon">Rp</span>
                                <input type="number" class="form-control">
                                <span class="input-group-addon">.00</span>
                            </div>

                           
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <button type="reset" class="btn btn-info">Reset</button>

                        </form>

                    </div>
                    <div class="col-lg-6">
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
                                <tbody>
                                    <tr>
                                        <td>/index.html</td>
                                        <td>1265</td>
                                        <td>32.3%</td>
                                        <td><button type="submit" class="btn btn-danger">Hapus</button></td>
                                    </tr>
                                    <tr>
                                        <td>/about.html</td>
                                        <td>261</td>
                                        <td>33.3%</td>
                                        <td><button type="submit" class="btn btn-danger">Hapus</button></td>
                                    </tr>
                                    <tr>
                                        <td>/sales.html</td>
                                        <td>665</td>
                                        <td>21.3%</td>
                                        <td><button type="submit" class="btn btn-danger">Hapus</button></td>
                                    </tr>
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
