<?=$this->extend('dasar_tampilan')?>
<?=$this->section('isiweb')?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Beranda</h3>
            </div>
            <div class="card-body">
                Halo ini Beranda <br/>
                Email yang diisikan : <?=$email?> <br/>
                password : <?=$sandi?>
            </div>
        </div>
    </div>

<?=$this->endSection()?>