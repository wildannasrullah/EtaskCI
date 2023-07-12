<?= $this->extend('layout/main_view') ?>
    <?= $this->section('content') ?>
    <div class="row clearfix">
        <div class="col-lg-9 col-md-9">
            <div class="card top_counter">
                <div class="body">
                    <img src="<?php echo base_url('assets/images/tsk_icon.png'); ?>" width="100%">
                </div>
            </div>
        </div>
    </div>
    
    <?= $this->endSection() ?>