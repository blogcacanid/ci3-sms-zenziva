<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
    <title>Kirim Pesan Dengan Zenziva SMS Gateway CodeIgniter 3</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
</head>
<body>
    <div class="container">
        <h1 align="center">Kirim Pesan SMS</h1><hr>
        <div class="col-md-5" style="margin:0 auto;">
            <div class="well bs-component">
                <form action="<?php echo base_url('pesan/kirim_pesan') ?>" method="post" class="form-horizontal"> 
                    <fieldset>
                        <div class="form-group">
                            <label class="col-lg-6 control-label">No Telepon</label>
                            <div class="col-lg-12">
                                <input type="text" name="mobile" class="form-control" placeholder="Masukan No Tujuan"> 
                            </div>
                            <div class="col-md-12">
                                <?php echo form_error('mobile', '<span class="text-danger">','</span>') ?>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-lg-3 control-label">Pesan</label>
                            <div class="col-lg-12">
                                <textarea name="message" class="form-control" placeholder="Masukan Pesan Anda"></textarea>
                            </div>
                            <div class="col-md-12">
                                <?php echo form_error('message', '<span class="text-danger">','</span>') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button type="reset" class="btn btn-default">Batal</button>
                                <button type="submit" class="btn btn-primary"><span class="fa fa-send"></span> Kirim</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.4.1.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
</body>
</html>  
