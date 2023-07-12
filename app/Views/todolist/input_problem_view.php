<?= $this->extend('layout/main_view') ?>
<?= $this->section('content') ?>

<div class='block-header'>
    <div class='row'>
        <div class='col-lg-5 col-md-8 col-sm-12'>                        
            <h2><a href='javascript:void(0);' class='btn btn-xs btn-link btn-toggle-fullwidth'><i class='fa fa-arrow-left'></i></a> Add New Problem</h2>
            <ul class='breadcrumb'>
                <li class='breadcrumb-item'><a href='?p=dashboard'><i class='icon-home'></i></a></li>                            
                <li class='breadcrumb-item'>E-Task</li>
                <li class='breadcrumb-item active'>New Problem</li>
            </ul>
        </div>         
    </div>
</div>
            <div class='row clearfix'>
				<div class='col-lg-4 col-md-4 col-sm-4'>
                    <div class='card'>
                        <div class='body'>
                            <div class='row clearfix'>                               
                                <div class='col-sm-12'><table border='0' width='100%'>
										    <tr><td></td><td>
												<label>Series:</label>
                                                <input type='text' class='form-control' value="<?php echo $series; ?>" readonly=readonly name='series' id='series'>
											    <input type='hidden' name='date' value='$date'><input type='hidden' name='time' value='$time'></td>
                                            </tr>
											<tr><td></td><td align='right'></td></tr><tr><td></td><td align='right'></td></tr><tr><td></td><td align='right'></td></tr>
											<tr><td colspan='2'><br>Priority Notess :</td></tr>
											<tr><td valign='top'>1.</td><td align='justify'><b>Kritis</b></td></tr>
											<tr><td align='center'>-</td><td> mesin berhenti tidak bisa berjalan </td></tr>
											<tr><td align='center'>-</td><td>mesin berjalan tetapi hasil rusak</td></tr>
											<tr><td valign='top'>2.</td><td align='justify'><b>Penting</b></td></tr>
											<tr><td align='center'>-</td><td>mesin bisa berjalan ,hasil berpotensi rusak tapi bisa diakali</td></tr>
											<tr><td valign='top'>3.</td><td align='justify'><b>Normal</b></td></tr>
											<tr><td align='center'>-</td><td>mesin berjalan , problem mengganggu</td></tr>
											<tr><td align='center'>-</td><td>bisa menghasilkan hasil yang baik</td></tr>
											<tr><td valign='top'>4.</td><td align='justify'><b>Saran</b></td><td></td></tr>
											<tr><td align='center'>-</td><td>ada penambahan fungsi sehingga mempermudah kerja</td></tr>
											
		<form method='POST' action='$aksi?p=input-problem&act=input' enctype='multipart/form-data'>
												<tr><td width='5%' align='right'></td><td><input type='hidden' name='nodoc[$i]' class='form-control' placeholder='Document $i'></td></tr>
											</table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
						<input type='hidden' name='kodeprob' value='$newID'>
						<input type='hidden' name='date' value='$date'><input type='hidden' name='time' value='$time'>
						<input type='hidden' name='c_at' value='$date'><input type='hidden' name='c_by' value='$_SESSION[username]'>
						<input type='hidden' name='u_by' value='$_SESSION[username]'>
						<input type='hidden' name='divisi' value='$u[divisi]'>
				<div class='col-lg-8 col-md-8 col-sm-8'>
                    <div class='card'>
                        <div class='body'>
                            <div class='row clearfix'>                               
                                <div class='col-sm-12'>
									<div class='form-group'>
									<label>Nama Pelapor:</label>
										<input type='text' class='form-control' name='nama_pelapor' value='<?= session()->get('fullname'); ?>'  readonly=''/>
									</div>
								</div>
								<div class='col-sm-12'>
									<div class='form-group'>
									<label>Prioritas:</label>
										<select class='form-control show-tick' name='idpriority' required>
											<option selected disabled>---Select Prioritas---</option>
												<?php foreach ($category_name as $value){ ?>
													<option value="<?= $value->idcat ?>"><?= $value->category_name ?></option>
												<?php } ?>
										</select>
									</div>
								</div>
								<div class='col-sm-6'>	
									<div class='form-group'>
									<label>Mesin:</label>
									<select class='form-control show-tick' name='idmesin' id='idmesin' required>
										<option selected disabled>---Pilih Mesin---</option>
												<?php foreach ($mesin as $value){ ?>
													<option value="<?= $value['idMesin'] ?>"><?= $value['namaMesin'] ?></option>
												<?php } ?>
									</select>
									</div>
								</div>
								<div class='col-sm-6'>
									<div class='form-group'>
									<label>Unit:</label>
									<select class='form-control show-tick' name='idunit' id='idunit' required>
										<option selected disabled>---Pilih Unit---</option>
									</select>
									</div>
								</div>
								<div class='col-sm-6'>
									<div class='form-group'>
										<label>Sub Unit 1:</label>
										<select class='form-control show-tick' name='id_subunit1' id='id_subunit1' >
											<option selected disabled>---Pilih Sub Unit 1---</option>
										</select>
									</div>
								</div>
								<div class='col-sm-6'>
									<div class='form-group'>
										<label>Sub Unit 2:</label>
										<select class='form-control show-tick' name='id_subunit2' id='id_subunit2' >
											<option selected disabled>---Pilih Sub Unit 2---</option>
										</select>
									</div>
								</div>
								<div class='col-sm-12'>
									<div class='form-group'>
									<label>Kategori :</label>
									<select class='form-control show-tick' name='category' id='category' required>
										<option selected disabled>---Pilih Kategori Laporan---</option>
                                        <?php foreach ($kategori as $value){ ?>
													<option value="<?= $value->namaKategori1 ?>"><?= $value->namaKategori1 ?></option>
												<?php } ?>
									</select>
									</div>
								</div>
								<div class='col-sm-12'>
									<label>Deskripsi:</label>
                                    <textarea cols='80' rows='10' name='des' required class='form-control'></textarea>
									<div class='form-group'>
									<label>Lampiran:</label>
										<input type='file' name='fupload[]' class='form-control' multiple='multiple'>
									</div>
								</div>
                                </div>
                                <div class='col-sm-12'>
                                    <div class='mt-4'>
                                        <button type='submit' class='btn btn-block btn-primary m-t-20'>Post</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				</form>
            </div>
        </div>
    </div>
</div>

<script>

$(document).ready(function(){
    $('#idmesin').change(function(){
        var idmesin = $('#idmesin').val();
        var action = 'get_unit';
        if(idmesin != '')
        {
            $.ajax({
                url:"<?php echo base_url('/todolist/action'); ?>", //todolist = controller, action = function
                method:"POST",
                data:{id_mesin:idmesin, action:action},
                dataType:"JSON",
                success:function(data)
                {
                    var html = '<option value="">---Pilih Unit *---</option>';
                    for(var count = 0; count < data.length; count++)
                    {
                        html += '<option value="'+data[count].idUnit+'">'+data[count].namaUnit+'</option>';
                    }
                    $('#idunit').html(html);
                }
            });
        }
        else
        {
            $('#idunit').val('');
        }
    });
	$('#idunit').change(function(){
        var idunit = $('#idunit').val();
        var action = 'get_subunit1';
        if(idunit != '')
        {
			console.log("OKE KESINI = "+idunit);
            $.ajax({
                url:"<?php echo base_url('/todolist/action'); ?>",
                method:"POST",
                data:{id_unit:idunit, action:action},
                dataType:"JSON",
                success:function(data)
                {
                    var html = '<option value="">---Pilih Sub Unit 1 *---</option>';
                    for(var count = 0; count < data.length; count++)
                    {
                        html += '<option value="'+data[count].idKat2+'">'+data[count].namaKategori2+'</option>';
                    }
                    $('#id_subunit1').html(html);
                }
            });
        }
        else
        {
            $('#id_subunit1').val('');
        }
    });
	$('#id_subunit1').change(function(){
        var idkat2 = $('#id_subunit1').val();
        var action = 'get_subunit2';
        if(idkat2 != '')
        {
            $.ajax({
                url:"<?php echo base_url('/todolist/action'); ?>",
                method:"POST",
                data:{id_kat2:idkat2, action:action},
                dataType:"JSON",
                success:function(data)
                {
                    var html = '<option value="">---Pilih Sub Unit 2 *---</option>';
                    for(var count = 0; count < data.length; count++)
                    {
                        html += '<option value="'+data[count].idKat3+'">'+data[count].namaKategori3+'</option>';
                    }
                    $('#id_subunit2').html(html);
                }
            });
        }
        else
        {
            $('#id_subunit2').val('');
        }
    });
});

</script>

<?= $this->endSection() ?>