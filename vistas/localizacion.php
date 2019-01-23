<?php

session_start();

if(isset($_SESSION["cedula"])){
    
}

    require_once("plantillas/head.php");
?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-header">
                    <h4><i class="fas fa-map-marker-alt"></i> Localizacion</h4>
                </div>

                <div class="card-body">
                    <p class="text-justify">
                        Nos Hencontramos en Venezuela. Estado Monagas Maturin en algun lugar de un pueblo llamado caripito
                        estamos alli y mas infomracion referente puede conmunicarse con los siguinetes numeros que poseemos 
                        lo estamos esperando gracias por su tiempo que pase buenos dias noches o trades.
                    </p>
                </div>

                <div class="card-footer text-muted">
                    <div>Digitel: 0412-555-55-55</div>
                    <div>Movilnet: 0426-555-55-55</div>
                    <div>Local: 0291-555-55-55</div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="conenedorMapa">
                <div id="map"></div>
            </div>
        </div>
    </div>
</div>

<?php
    require_once("plantillas/fin.php");
?>