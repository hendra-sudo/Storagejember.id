                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            POS (Point of Sale) <small>Edit Data Customer</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('customer/edit'); ?>
                                <input type="hidden" name="id" value="<?php echo $record['customer_id']?>">
                                <!-- <div class="form-group">
                                    <label>Nama Lengkap Customer</label>
                                    <input type="text" class="form-control" name="nama" value="<?php echo $record['nama_customer']?>">
                                </div> -->
                                
                                <div class="form-group">
                                    <label>Alamat Asli Customer</label>
                                    <input type="text" class="form-control" name="alamat_asli" value="<?php echo $record['alamat_asli']?>">
                                </div>
                                <div class="form-group">
                                    <label>Alamat Pindahan Customer</label>
                                    <input type="text" class="form-control" name="alamat_pindahan" value="<?php echo $record['alamat_pindahan']?>">
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Update</button> | 
                                <?php echo anchor('customer','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->