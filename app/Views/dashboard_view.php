<?= $this->extend('layout/main_view') ?>
<?= $this->section('content') ?>

    <style>
	.fixed {
		position: fixed;
		top: 13%;
		left: 80%;
		width: 100%
	}
    
	@media only screen and (max-device-width : 1400px) {
		.fixed {
			position: fixed;
			top: 13%;
			left: 80%;
			width: 100%
		}
	}

	@media only screen and (max-device-width : 728px) {
		.fixed {
			position: relative;
			top: 0%;
			left: 0%;
			width: 100%
		}
	}

    .kritis {
        background-color: red !important;
        color : white;
        }
    .penting {
        background-color: yellow !important;
        }
    .normal_saran {
        background-color: white !important;
        }
    </style>
    <div class="row clearfix">
	<div class="col-lg-9 col-md-9">
		<div class="card top_counter">
			<div class="body">
                <div class="header">
					<table border='0' width='100%'>
						<tr>
							<td width='90%'>
								<h2><u>Daftar Laporan Kerusakan</u>
									<font color='red'><b></b></font>
								</h2>
							</td>
							<td><a href="" title='Klik untuk melihat laporan milik Anda' class='btn btn-sm btn-success'>Pribadi</a></td>
							<td><a href="" title='Klik untuk melihat semua laporan' class='btn btn-sm btn-warning'>Semua</a></td>
						</tr>
					</table>
				</div>
                <ul class="right_chat list-unstyled">
					<div class='row'>
						<div class='col-lg-12 col-md-12'>
							<div class='table-responsive'>
								<table class='table table-striped table-hover dashboard_data'>
									<thead>
										<tr>
											<th align='center' width='10%'>No.</th>
											<th align='center'>MASALAH</th>
											<th width='10%'>DESKRIPSI</th>
											<th align='center'>MESIN</th>
											<th align='center'>UNIT</th>
                                            <th width='10%'>JENIS LAPORAN</th>
											<th width='10%'>PELAPOR</th>
											<th width='10%'>TEKNISI</th>
										</tr>
									</thead>
                                </table>
                            </div>
						</div>
					</div>
				</ul>
			</div>
		</div>
	</div>
    <div class="col-lg-3 col-md-3">
		<div class="fixed">
            <div class="col-lg-12 col-md-12">
                <div class="cardds top_counter">
                    <div class="body">
                        <a href='?p=input-est-time'>
                            <div class="icon"><img src='<?php echo base_url('assets/images/bell.gif'); ?>' width='95%' /> </div>
                        </a>
                        <div class="content">
                            <div class="text"><b>
                                    <font color='red'>Estimasi?</font>
                                </b></div>
                            <h4 class="number">
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="cardds top_counter">
                    <div class="body">
                        <a href='?p=pendingproblem'>
                            <div class="icon"><img src='<?php echo base_url('assets/images/pending.gif'); ?>' width='100%' /> </div>
                        </a>
                        <div class="content">
                            <div class="text"><b>
                                    <font color='red'>Pending</font>
                                </b></div>
                            <h4 class="number" id="pending">
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="cardds top_counter">
                    <div class="body">
                        <a href='?p=dashboard&act=blmclosed'>
                            <div class="icon"><img src='<?php echo base_url('assets/images/pending.gif'); ?>' width='100%' /> </div>
                        </a>
                        <div class="content">
                            <div class="text"><b>
                                    <font color='red'>Belum Approved (Closed)</font>
                                </b></div>
                            <h4 class="number">
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="cardds top_counter">
                    <div class="body">
                        <a href='?p=dashboard&act=open'>
                            <div class="icon"><i class="fa fa-hourglass-half"></i> </div>
                        </a>
                        <div class="content">
                            <div class="text"><b>Open</b></div>
                            <h4 class="number" id="open">
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="cardds top_counter">
                    <div class="body">
                        <a href='?p=dashboard&act=assign'>
                            <div class="icon"><i class="fa fa-signature"></i> </div>
                        </a>
                        <div class="content">
                            <div class="text"><b>Assigned</b></div>
                            <h4 class="number" id="assign">
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="cardds top_counter">
                    <div class="body">
                        <a href='?p=dashboard&act=inprogress'>
                            <div class="icon"><i class="fa fa-spinner"></i> </div>
                        </a>
                        <div class="content">
                            <div class="text"><b>In Progress</b></div>
                            <h4 class="number" id="inprogress">
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="cardds top_counter">
                    <div class="body">
                        <a href='?p=dashboard&act=menunggusp' title='Menunggu Sparepart'>
                            <div class="icon"><i class="fa fa-cog"></i> </div>
                        </a>
                        <div class="content">
                            <div class="text"><b>Sparepart</b></div>
                            <h4 class="number" id="sparepart">
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="cardds top_counter">
                    <div class="body">
                        <a href='?p=dashboard&act=finish'>
                            <div class="icon"><i class="fa fa-check"></i> </div>
                        </a>
                        <div class="content">
                            <div class="text"><b>Finish</b></div>
                            <h4 class="number" id="finish">
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="cardds top_counter">
                    <div class="body">
                        <a href='?p=dashboard&act=approved'>
                            <div class="icon"><i class="fa fa-user"></i> </div>
                        </a>
                        <div class="content">
                            <div class="text"><b>Approved</b></div>
                            <h4 class="number" id="approved">
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="cardds top_counter">
                    <div class="body">
                        <a href='?p=dashboard&act=rejected'>
                            <div class="icon"><i class="fa fa-window-close"></i> </div>
                        </a>
                        <div class="content">
                            <div class="text"><b>Rejected</b></div>
                            <h4 class="number" id="rejected">
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function () {
                    $('.dashboard_data').DataTable({
                        'order' : [],
                        'processing' : true,
                        'serverSide' : true,
                        "ajax": {
                            "url": "<?php echo site_url('Dashboard/table_dashboard'); ?>",
                            "type": "POST"
                        },
                        "columnDefs" : [{ 
                                "targets" : [0],
                                "orderable" : false
                            }],
                        "createdRow": function( row, data, dataIndex){
                            if( data[8] ==  "Kritis"){
                                $(row).addClass('kritis');
                            }else if( data[8] ==  "Penting"){
                                $(row).addClass('penting');
                            }else{
                                $(row).addClass('normal_saran');
                            }

                        },
                        stateSave: true,
                        "bDestroy": true,
                        dom: 'Bfrtip',
                        buttons: [
                            'copy', 'excel', 'csv', 'print'
                        ]
                    });
                });
                
            </script>





