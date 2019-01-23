<?php
session_start();

if(isset($_SESSION["cedula"])){
}

    require_once("plantillas/head.php");
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <img src="<?php echo RUTA_IMG; ?>historiafransico.jpg" height=450 class="card-img-top" alt="">
                </div>
                <div class="card-body">
                    <p class="text-justify">
                        Sebastián Francisco de Miranda y Rodríguez Espinosa, conocido como Francisco de Miranda (Caracas, 28 de marzo de 1750-San Fernando, (Cádiz), 14 de julio de 1816), fue un político, militar, diplomático, escritor, humanista e ideólogo, venezolano y español, considerado El Precursor de la Emancipación Americana contra el Imperio español. Conocido como El Primer Venezolano Universal y El Americano más Universal, fue partícipe de la Independencia de los Estados Unidos, de la Revolución Francesa y posteriormente de la Independencia de Venezuela, siendo líder del Bando Patriota y gobernante de la Primera República de Venezuela durante esta última, en calidad de Dictador Plenipotenciario y Jefe Supremo de los Estados de Venezuela.1​
                        Viajó durante gran parte de su vida participando en conflictos armados al servicio de diversos países, entre los que destacan tres guerras concretas: la Independencia de los Estados Unidos, la Revolución francesa, acontecimiento del que fue protagonista destacado, por lo que le fue otorgado el título de Héroe de la Revolución, y las Guerras de Independencia Hispanoamericana. Destacó en la política como un firme defensor de la independencia y la soberanía de las naciones en el ámbito internacional. Militó con los girondinos en Francia, fue firmante del Acta de la Declaración de Independencia de Venezuela e impulsor y líder de la Sociedad Patriótica. También fue el creador del proyecto geopolítico conocido como Gran Colombia que Simón Bolívar trataría de llevar a cabo tras la liberación de los territorios que hoy conforman Colombia, Panamá, Ecuador y Venezuela en 1826, aspirando a unificarlos en una sola nación.
                        Militar en las filas de los ejércitos español y francés, alcanzó los rangos de coronel y mariscal, respectivamente. Además, obtuvo el grado de coronel en el ejército ruso, concedido por Catalina II la Grande, y fue el primer comandante en jefe de los ejércitos venezolanos, ostentando el título de generalísimo. Su carrera militar contempla su participación en cuatro contiendas: el sitio de Melilla (1774) y el ataque a Argel (1775) en el norte de África, la Guerra de Independencia Estadounidense, las Guerras Revolucionarias Francesas y la Guerra de Independencia de Venezuela. Entre sus gestas militares destacan su actuación en el sitio de Melilla, la batalla de Pensacola y la batalla de Valmy. Miranda fue combatiente destacado en tres continentes: África, América y Europa.2​
                        A pesar de haber formado parte de tantos procesos revolucionarios y gubernamentales en el ámbito internacional, fracasó a la hora de poner en práctica sus proyectos en su propio país, Venezuela. No obstante, su ideal político perduró en el tiempo y sirvió de base para la fundación de la Gran Colombia, mientras que sus ideas independentistas influyeron en destacados líderes de la «Emancipación Americana», como Simón Bolívar en Venezuela y Bernardo O'Higgins en Chile.3​
                        Su nombre está grabado en el Arco del Triunfo de París. Su retrato forma parte de la Galería de los Personajes en el palacio de Versalles; su estatua se encuentra frente a la del general Kellerman en el Campo de Valmy, Francia.
                    </p>
                </div>            
            </div>
        </div>
    </div>
</div>


<?php
    require_once("plantillas/fin.php");
?>