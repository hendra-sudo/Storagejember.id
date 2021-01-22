                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            POS (Point of Sale) <small>Tambah Data Customer</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('customer/post'); ?>
                                <div class="form-group">
                                    <label>Nama Lengkap Customer</label>
                                    <input type="text" class="form-control" name="nama_customer" placeholder="nama lengkap">
                                </div>
                                <!-- <div class="form-group">
                                    <label>Nomor Telepon Customer</label>
                                    <input type="text" class="form-control" name="nomor_customer" placeholder="089605885474">
                                </div> -->
                                <!-- <div class="form-group">
                                    <label>Nomor Telepon Customer</label>
                                    <input class="number" name="nomor_customer" placeholder="089605885474">
                                </div> -->
                                <div class="form-group">
                                    <label>Alamat Asli Customer</label>
                                    <input type="text" class="form-control" name="alamat_asli" placeholder="Alamat Asli">
                                </div>
                                <div class="form-group">
                                    <label>Alamat Pindahan</label>
                                    <input type="text" class="form-control"  name="alamat_pindahan" placeholder="Alamat Pindahan">
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> | 
                                <?php echo anchor('customer','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->