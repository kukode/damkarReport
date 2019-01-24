<?php 
ob_start();
?>
<div class="row">
    <div class="col-md-4">
        <a href="?page=laporan">
            <div class="panel panel-body panel-primary">
                <div class="text-center">
                Laporan Kejadian Kebakaran
                </div>
            </div>
        </a>
    </div>
</div>

<?php

$home = ob_get_clean();

?>