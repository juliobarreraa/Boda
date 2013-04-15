
<!--  Output an array of parts for HTML Header, Header & Banner 
================================================== -->

<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo Yii::app()->name ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo Yii::app()->theme->baseUrl ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl ?>/css/style.css" rel="stylesheet">
	<link rel='stylesheet' id='prettyphoto-css'  href="<?php echo Yii::app()->theme->baseUrl ?>/css/prettyPhoto.css" type='text/css' media='all'>
  	
  	<!-- Google Fonts call. Font Used Open Sans & Open Sans Condensed -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="<?php echo Yii::app()->theme->baseUrl ?>/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl ?>/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo Yii::app()->theme->baseUrl ?>/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Yii::app()->theme->baseUrl ?>/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo Yii::app()->theme->baseUrl ?>/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo Yii::app()->theme->baseUrl ?>/ico/apple-touch-icon-57-precomposed.png">

    <!-- JQuery -->
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl ?>/js/jquery.js"></script>
    <!-- Load ScrollTo -->
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl ?>/js/jquery.scrollTo-1.4.2-min.js"></script>
    <!-- Load LocalScroll -->
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl ?>/js/jquery.localscroll-1.2.7-min.js"></script>

    
  	<!-- prettyPhoto Initialization -->
	<script type="text/javascript" charset="utf-8">
	  $(document).ready(function(){
	    $("a[rel^='prettyPhoto']").prettyPhoto();
	  });
	</script>
	</head>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=428775730548548";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->

        <div class="navbar navbar-inverse navbar-fixed-top">
              <div class="navbar-inner">
                <div class="container">

                            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                            </a>
                            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
                             <nav class="nav-collapse collapse"><ul id="menu-main" class="nav">
                                <li><a title="¿Dónde?" href="#where">¿Dónde?</a></li>
                                <li><a title="Confirmar Asistencia" href="#confirm">Confirmar asistencia</a></li>
                                <li><a title="Mesa de Regalos" href="#table">Mesa de regalos</a></li>
                                <li><a title="Vestimenta" href="#clothing">Vestimenta</a></li>
                                <li><a title="Hoteles" href="#hotels">Hoteles</a></li>
                                <li><a title="¿Cómo llegar?" href="#arrival">¿Cómo llegar?</a></li>
                                <li><a title="Mensaje" href="#message">Mensaje</a></li>
                                <li><a title="Música" href="#music">Música</a></li>
                                <li><a title="Agenda" href="#diary">Agenda</a></li>
                                </ul>
                            </nav>
                </div> <!-- /.container -->
              </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->
    </div><!-- /.navbar-wrapper -->


<div id="top"></div>

<!-- Feature 
================================================== -->
<div class="scrollblock">
    <section>
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <article>
                            <div class="bg-cog"></div>

                            <div class="cont_1000" style="padding-top: 70px;">
                                <div style="overflow:hidden; width:670px; margin:auto;">
                                    <div class="novio" style="margin-right: 45px;">
                                        <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/efrente.jpg" alt="Erika">
                                        <h3>ERIKA</h3>
                                        <span class="gris_subtitulo">La Novia</span>
                                    </div>
                                    <div id="fecha">
                                        <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/fecha_centro.jpg" alt="16 nov 13">
                                    </div>
                                    <div class="novio" style="margin-left: 45px;">
                                        <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/mfrente.jpg" alt="Mauro">
                                        <h3>MAURO</h3>
                                        <span class="gris_subtitulo">El Novio</span>
                                    </div>
                                </div>
                                <div>
                                    <h3>Hacienda San Pancho</h3>
                                    <span class="gris_subtitulo">Riviera Nayarit, Jalisco</span>
                                    <p class="p_centrado">Escribir sobre el concepto de la boda, convivencia, fin de semana, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea com- modo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lecto- res legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                </div>
                            </div>
                            <div class="bg-unique-cog"></div>
                            <div class="bg-cog bottom"></div>
                        </article>
                    </div><!-- ./span12 -->
                </div><!-- .row -->
            </div><!-- ./container -->
    </section>
</div><!-- /.scrollblock -->

<!-- confirm Section
 ================================================== -->

<section id="where" class="single-page scrollblock">
    <div class="container">
        <div class="row">
            <div class="span12">
                <article>
                    <div class="bg-cog"></div>
                    <div class="cont_1000">
                        <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/header_donde.jpg" alt="¿Dónde?">
                        <div>
                            <div class="div_cont_revista_dos">
                                <div class="div_cont_txt_revista_dos">
                                    <h3>Hacienda San Pancho</h3>
                                    <span class="gris_subtitulo">Riviera Nayarit</span>
                                    <p class="p_just">Hacienda San Pancho está situado en un área de 40 hectáreas cuadradas con abundante vegetación y frente a 500 metros lineales de playa. Dentro del desarrollo Hacienda San Pancho encontrarás un centro cultural, con galerías de artes visuales y esculturas, una sala de cine con capacidad para 60 personas, sillones reclinables y sonido envolvente, además de un hotel boutique, un club de playa y demás atractivos.</p>
                                    <p class="p_just">El hotel boutique, que lleva el nombre del desarrollo, cuenta con 18 habitaciones, todas con vista al rústico pueblo de San Francisco, Nayarit y siete de ellas ofrecen adicionalmente su propia alberca tipo splash pool en la terraza. La propiedad también cuenta con un hermoso club de playa, alberca tipo infinity, área de asoleaderos y otra área de lounge desde donde se pueden apreciar las espectaculares puestas del sol que caracterizan a la región de Bahía de Banderas.</p>
                                    <p class="p_just">En Hacienda San Pancho existen tres tipos de viviendas para rentar: casitas, residencias y villas. Las casitas son de 3 habitaciones y 3 y medio baños, cuentan con cocina, comedor y alberca tipo splash pool en la terraza. En el área de las residencias, que cuenta con una alberca común para los propietarios, se ofrecen unidades de 2 recámaras y 2 baños, cocina integral, comedor y algunas de ellas incluso alberca tipo splash pool en la terraza. Las villas por otro lado, contarán con 3 habitaciones y 3 baños, cocina integral, comedor y terraza con vista a la hermosa playa y pueblo de San Francisco.</p>
                                </div>
                                <div class="div_cont_img_revista_dos">
                                    <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/donde_1.jpg" alt="¿Donde 1?">
                                    <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/donde_2.jpg" alt="¿Donde 2?" style="margin-top:20px;">
                                </div>
                            </div>
                            <h3 class="h3_gris_greca">Pueblo San Pancho</h3>
                            <div class="div_cont_revista_dos">
                                <div class="div_cont_img_revista_dos">
                                    <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/Sanpancho_1.jpg" alt="Sanpancho 1">
                                    <div class="video" style="width:340px; height:190px; background:gray; margin-top:20px; color:white;">
                                        VIDEO
                                    </div>
                                    <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/Sanpancho_2.jpg" alt="Sanpancho 2" style="margin-top:20px;">
                                </div>
                                <div class="div_cont_txt_revista_dos">
                                    <p class="p_der" style="margin-top:0;">La historia de San Pancho se cuenta en los muros de una finca cercana a la playa, con imágenes pintadas en acrílico, protagonizadas por coloridos personajes, por el paisaje de este destino considerado como la "capital cultural" del estado de Nayarit gracias a los diversas iniciativas para impulsar la cultura y educación que se realizan.</p>
                                    <p class="p_der">Los primeros habitantes de esta zona, donde nace la Sierra Madre del Sur, fueron indígenas que pertenecían al grupo del Tatuan de Nayares.</p>
                                    <p class="p_der">En 1524 don Francisco Cortés de Buenaventura nombra la zona como Azapan y los españoles bautizan al poblado con el nombre de San Francisco de Azapan, que sería parte de la Hacienda de Jaltemba, donde se producía coco de aceite.</p>
                                    <p class="p_der">En 1936 se formo el ejido Sayulita, al que pertenece San Pancho y que, de cierta manera, marcó el espíritu de comunidad que caracteriza a este destino. Y es precisamente la acción social de los pobladores, su trabajo en conjunto en proyectos educativos, de cuidado del medio ambiente y promoción del arte, que San Pancho ha tenido un crecimiento y desarrollo positivos.</p>
                                    <p class="p_der">La playa de San Pancho, de intensa luminosidad, recibe tanto a quienes quieren descansar y relajarse frente al mar, tomando el sol y leyendo, como a los de espíritu aventurero que desafían las olas del Pacífico montados en sus tablas de surf.</p>
                                    <p class="p_der">En sus calles, cuyos nombres transportan a países tan lejanos como Kenia, Pakistán, India y Egipto encontrará desde centros culturales, galerías, pequeños restaurantes, panaderías artesanales y cafeterías, hasta campos de futbol y golf.</p>
                                    <p class="p_der">Mención aparte merece el club de polo La Patrona (www.polovallarta.com), emblema de San Pancho, un sitio donde los aficionados a este deporte podrán formar parte, recibir lecciones privadas y participar en torneos nacionales e internacionales; y para quienes no lo practican La Patrona ofrece facilidades como restaurante, galería de arte, sala de conciertos y organización de eventos privados. Y si todo esto no fuera suficiente, contemple las impresionantes mansiones que se han levantado en los cerros que custodian San Pancho, e imagine que éste podría ser un hogar de ensueño.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-cog bottom"></div>
                </article>
            </div><!-- ./span12 -->
        </div><!-- .row -->
    </div><!-- /.container -->
</section><!-- /#confirm -->


<!-- hotels Section
 ================================================== -->


<!-- table Section
 ================================================== -->

<section class="single-page scrollblock">
    <div class="container">
        <div class="row">
            <div class="span12">
                <article>
                    <div class="bg-cog"></div>
                    <div class="row">
                        <div class="span4">
                            <img src="assets/img/hacienda2.png">
                            <br /><br />
                            <img src="assets/img/hacienda3.png">
                            <br /><br />
                            <img src="assets/img/hacienda4.png">
                        </div>
                        <div class="span8">
                            <p>La historia de San Pancho se cuenta en los muros de una ﬁnca cercana a la playa, con imágenes pintadas en acrílico, protagonizadas por coloridos personajes, por el paisaje de este destino considerado como la "capital cultural" del estado de Nayarit gracias a los diversas iniciativas para impulsar la cultura y educación que se realizan.</p>
                            <p>Los primeros habitantes de esta zona, donde nace la Sierra Madre del Sur, fueron indígenas que pertenecían al grupo del Tatuan de Nayares.</p>
                            <p>En 1524 don Francisco Cortés de Buenaventura nombra la zona como Azapan y los españoles bautizan al poblado con el nombre de San Francisco de Azapan, que sería parte de la Hacienda de Jaltemba, donde se producía coco de aceite.</p>
                            <p>En 1936 se formó el ejido Sayulita, al que pertenece San Pancho y que, de cierta manera, marcó el espíritu de comunidad que caracteriza a este destino. Y es precisamente la acción social de los pobladores, su trabajo en conjunto en proyectos educativos, de cuidado del medio ambiente y promoción del arte, que San Pancho ha tenido un crecimiento y desarrollo positivos.</p>
                            <p>La playa de San Pancho, de intensa luminosidad, recibe tanto a quienes quieren descansar y relajarse frente al mar, tomando el sol y leyendo, como a los de espíritu aventurero que desafían las olas del Pacíﬁco montados en sus tablas de surf.</p>
                            <p>En sus calles, cuyos nombres transportan a países tan lejanos como Kenia, Pakistán, India y Egipto encontrará desde centros culturales, galerías, pequeños restaurantes, panaderías artesanales y cafeterías, hasta campos de futbol y golf.</p>
                            <p>Mención aparte merece el club de polo La Patrona (www.polovallarta.com), emblema de San Pancho, un sitio donde los aﬁcionados a este deporte podrán formar parte, recibir lecciones privadas y participar en torneos nacionales e internacionales; y para quienes no lo practican La Patrona ofrece facilidades como restaurante, galería de arte, sala de conciertos y organización de eventos privados. Y si todo esto no fuera suﬁciente, contemple las impresionantes mansiones que se han levantado en los cerros que custodian San Pancho, e imagine que éste podría ser un hogar de ensueño.</p>
                        </div>
                    </div>
                    <div class="bg-cog bottom"></div>
                </article>
            </div><!-- ./span12 -->
        </div><!-- .row -->
    </div><!-- /.container -->
</section><!-- /#table -->


<section id="" class="single-page scrollblock">
    <div class="container">
        <div class="row">
            <div class="span12">
                <article>
                    <div class="bg-cog"></div>
                    <div id="confirm">
                        <br /><br />
                    </div>
                    <h2>Confirmar Asistencia</h2>
                    <div class="cont_1000">
                        <div class="div_cont_revista_dos">
                            <div class="div_cont_txt_revista_dos" style="margin-left:110px; width:340px;" >
                                <form action="#" method="post">
                                    <ul class="ul_form">
                                        <li><span>Nombre Completo :</span> <input type="text" name="nombre" style="width:230px;" /></li>
                                        <li><span>Teléfono de contacto :</span> <input type="text" name="nombre" style="width:215px;" /></li>
                                        <li><span>Dirección para envío de invitación :</span></li>
                                        <li><textarea name="direccion" id="" cols="30" rows="10" style="width:335px; height:85px;" ></textarea></li>
                                        <li style="text-align:right;"><button type="submit" class="btn_amarillo">Enviar</button></li>
                                    </ul>
                                </form>
                            </div>
                            <div class="div_cont_img_revista_dos" style="float:right; margin-right:110px;" >
                                <img src="<?php echo Yii::app()->theme->baseUrl ?>/img/Asistencia.jpg" alt="Vestimenta">
                            </div>
                        </div>
                    </div>
                    <div class="bg-cog bottom"></div>
                </article>
            </div><!-- ./span12 -->
        </div><!-- .row -->
    </div><!-- /.container -->
</section><!-- /#hotels -->


<!-- how arrival Section
 ================================================== -->

<section id="" class="single-page scrollblock">
    <div class="container">
        <div class="row">
            <div class="span12">
                <article>
                    <div class="bg-cog"></div>
                    <div id="table">
                        <br /><br />
                    </div>
                    <h2>Mesa de regalos</h2>
                    <div class="cont_1000 div_cont_revista_dos" style="margin-top:55px;">
                        <div class="div_cont_img_revista_dos" style="margin-left:100px;">
                            <img src="<?php echo Yii::app()->theme->baseUrl ?>/img/regalos.jpg" alt="Mesa de regalos">
                        </div>
                        <div class="div_cont_txt_revista_dos" style="width:255px; margin-left:140px; margin-top:40px;">
                            <img src="<?php echo Yii::app()->theme->baseUrl ?>/img/liverpool.png" alt="liverpool">
                            <span class="gris_subtitulo">Nuestra mesa de regalos se encuentra en Liverpool con el número: <b>25020531</b></span>
                        </div>
                    </div>
                    <div class="bg-cog bottom"></div>
                </article>
            </div><!-- ./span12 -->
        </div><!-- .row -->
    </div><!-- /.container -->
</section><!-- /#arrival -->

<!-- clothing Section
 ================================================== -->

<section class="single-page scrollblock">
    <div class="container">
        <div class="row">
            <div class="span12">
                <article>
                    <div class="bg-cog"></div>
                    <div id="clothing">
                        <br /><br />
                    </div>
                    <h2>Vestimenta</h2>
                    <div class="cont_1000" style="margin-bottom:20px;">
                        <img src="<?php echo Yii::app()->theme->baseUrl ?>/img/vestimenta.jpg" alt="Vestimenta">
                    </div>
                    <div class="bg-cog bottom"></div>
                </article>
            </div><!-- ./span12 -->
        </div><!-- .row -->
    </div><!-- /.container -->
</section><!-- /#clothing -->



<!-- message Section
 ================================================== -->

<section id="" class="single-page scrollblock">
    <div class="container">
        <div class="row">
            <div class="span12">
                <article>
                    <div class="bg-cog"></div>
                    <div id="hotels">
                        <br /><br />
                    </div>
                    <h2 style="margin-bottom:50px; ">Hoteles</h2>
                    <div class="hotel">
                        <div class="imagen">
                            <img src="<?php echo Yii::app()->theme->baseUrl ?>/img/Hoteles.jpg" alt="Hotel">
                        </div>
                        <div class="cont">
                            <h3>Hacienda San Pancho</h3>
                            <ul>
                                <li><span>Dirección:</span> Primavera No. 10, Col. El Izote. San Francisco, Bahía de Banderas, Nayarit. </li>
                                <li><span>Tiempo aproximado:</span>Lugar de la boda</li>
                                <li><span>Rangos de precio:</span></li>
                                <li>Suite con terraza (1 cama king o 2 queen): 1,700 pesos</li>
                                <li>Suite con alberca (1 cama king o 2 queen): 2,000 pesos</li>
                                <li><a href="http://www.haciendasanpancho.mx">www.haciendasanpancho.mx</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="hotel">
                        <div class="imagen">
                            <img src="<?php echo Yii::app()->theme->baseUrl ?>/img/Hoteles.jpg" alt="Hotel">
                        </div>
                        <div class="cont">
                            <h3>Hacienda San Pancho</h3>
                            <ul>
                                <li><span>Dirección:</span> Primavera No. 10, Col. El Izote. San Francisco, Bahía de Banderas, Nayarit. </li>
                                <li><span>Tiempo aproximado:</span>Lugar de la boda</li>
                                <li><span>Rangos de precio:</span></li>
                                <li>Suite con terraza (1 cama king o 2 queen): 1,700 pesos</li>
                                <li>Suite con alberca (1 cama king o 2 queen): 2,000 pesos</li>
                                <li><a href="http://www.haciendasanpancho.mx">www.haciendasanpancho.mx</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="hotel">
                        <div class="imagen">
                            <img src="<?php echo Yii::app()->theme->baseUrl ?>/img/Hoteles.jpg" alt="Hotel">
                        </div>
                        <div class="cont">
                            <h3>Hacienda San Pancho</h3>
                            <ul>
                                <li><span>Dirección:</span> Primavera No. 10, Col. El Izote. San Francisco, Bahía de Banderas, Nayarit. </li>
                                <li><span>Tiempo aproximado:</span>Lugar de la boda</li>
                                <li><span>Rangos de precio:</span></li>
                                <li>Suite con terraza (1 cama king o 2 queen): 1,700 pesos</li>
                                <li>Suite con alberca (1 cama king o 2 queen): 2,000 pesos</li>
                                <li><a href="http://www.haciendasanpancho.mx">www.haciendasanpancho.mx</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="hotel">
                        <div class="imagen">
                            <img src="<?php echo Yii::app()->theme->baseUrl ?>/img/Hoteles.jpg" alt="Hotel">
                        </div>
                        <div class="cont">
                            <h3>Hacienda San Pancho</h3>
                            <ul>
                                <li><span>Dirección:</span> Primavera No. 10, Col. El Izote. San Francisco, Bahía de Banderas, Nayarit. </li>
                                <li><span>Tiempo aproximado:</span>Lugar de la boda</li>
                                <li><span>Rangos de precio:</span></li>
                                <li>Suite con terraza (1 cama king o 2 queen): 1,700 pesos</li>
                                <li>Suite con alberca (1 cama king o 2 queen): 2,000 pesos</li>
                                <li><a href="http://www.haciendasanpancho.mx">www.haciendasanpancho.mx</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="bg-cog bottom"></div>
                </article>
            </div><!-- ./span12 -->
        </div><!-- .row -->
    </div><!-- /.container -->
</section><!-- /#message -->


<!-- arrival Section
 ================================================== -->

<section id="" class="single-page scrollblock">
    <div class="container">
        <div class="row">
            <div class="span12">
                <article>
                    <div class="bg-cog"></div>
                    <div id="arrival">
                        <br /><br />
                    </div>
                    <h2>¿Cómo llegar?</h2>
                    <h3 class="h3_gris_greca" >Aéreo</h3>
                    <div id="cont_aerolineas">
                        <div>
                            <img src="<?php echo Yii::app()->theme->baseUrl ?>/img/volaris.jpg" alt="volaris">
                            <h3>Volaris</h3>
                            <a href="http://www.volaris.mx">www.volaris.mx</a>
                        </div>
                        <div>
                            <img src="<?php echo Yii::app()->theme->baseUrl ?>/img/interjet.jpg" alt="interjet">
                            <h3>Interjet</h3>
                            <a href="http://www.interjet.com.mx">www.interjet.com.mx</a>
                        </div>
                        <div>
                            <img src="<?php echo Yii::app()->theme->baseUrl ?>/img/aeromexico.jpg" alt="aeromexico">
                            <h3>Aeroméxico</h3>
                            <a href="http://www.aeromexico.com">www.aeromexico.com</a>
                        </div>
                    </div>
                    <div style="margin-top:40px;">
                        <p style="font-size:20px;">
                            Vuelo México D.F.: Puerto Vallarta: 1hr. y media <br>
                            Puerto Vallarta - Hacienda San Pancho: 45 min.
                        </p>
                    </div>
                    <h3 class="h3_gris_greca">Terrestre Auto</h3>
                    <div id="cont_auto">
                        <div class="img_transporte" >
                            <img src="<?php echo Yii::app()->theme->baseUrl ?>/img/Transporte_coche.jpg" alt="Transporte coche">
                        </div>
                        <div class="txt_transporte" style="margin-top:30px;" >
                            <p>Puedes ponerte de acuerdo con 5 ó 6 personas y ahorrar, recuerda que es puente y puedes descansar todo el Domingo para manejar el lunes.</p>
                            <p>Costo aproximado casetas: $2,170 pesos redondo</p>
                            <p>Tiempo México D.F.- Puerto Vallarta: entre 8 y 9 hrs </p>
                            <p>Tiempo Puerto Vallarta - Hacienda San Pancho: 45 min.</p>
                        </div>
                    </div>
                    <h3 class="h3_gris_greca" >Terrestre autobus</h3>
                    <div id="cont_autobus">
                        <div class="txt_transporte" >
                            <p>Puedes ponerte de acuerdo con 5 ó 6 personas y ahorrar, recuerda que es puente y puedes descansar todo el Domingo para manejar el lunes.</p>
                            <p>Costo aproximado casetas: $2,170 pesos redondo</p>
                            <p>Tiempo México D.F.- Puerto Vallarta: entre 8 y 9 hrs</p>
                            <p>Tiempo Puerto Vallarta - Hacienda San Pancho: 45 min.</p>
                        </div>
                        <div class="img_transporte" >
                            <img src="<?php echo Yii::app()->theme->baseUrl ?>/img/Transporte_Autobus.jpg" alt="Transporte autobús">
                        </div>
                    </div>
                    <div style="margin-top:70px;">
                        <img src="<?php echo Yii::app()->theme->baseUrl ?>/img/Transporte_mapa.jpg" alt="Transporte mapa">
                        <div style="width:810px; margin:auto;">
                            <p class="p_centrado_bold">Descripción desde aeropuerto de Puerto Vallarta:</p>
                            <p class="p_centrado">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit .</p>
                        </div>          
                    </div>

                    <div class="bg-cog bottom"></div>
                </article>
            </div><!-- ./span12 -->
        </div><!-- .row -->
    </div><!-- /.container -->
</section><!-- /#arrival -->

<!-- music Section
 ================================================== -->

<section id="" class="single-page scrollblock">
    <div class="container">
        <div class="row">
            <div class="span12">
                <article>
                    <div class="bg-cog"></div>
                    <div id="message">
                        <br /><br />
                    </div>
                    <h2>Mensaje</h2>
                    <img src="<?php echo Yii::app()->theme->baseUrl ?>/img/composicion_us.jpg" alt="composición nosotros">
                    <div class="feed_facebook">
                        <div class="fb-comments" data-href="http://www.codebit.org" data-width="1000" data-num-posts="10"></div>
                    </div>

                    <div class="bg-cog bottom"></div>
                </article>
            </div><!-- ./span12 -->
        </div><!-- .row -->
    </div><!-- /.container -->
</section><!-- /#music -->


<!-- music Section
 ================================================== -->

<section id="" class="single-page scrollblock">
    <div class="container">
        <div class="row">
            <div class="span12">
                <article>
                    <div class="bg-cog"></div>
                    <div id="music">
                        <br /><br />
                    </div>
                    <h2>Música</h2>
                    <div class="cont_1000">
                        <div class="div_cont_revista_dos">
                            <div class="div_cont_txt_revista_dos" style="margin-left:115px; width: 340px;">
                                <form action="">
                                    <ul class="ul_form ul_form_musica">
                                        <li><span>Nombre invitado : </span><input type="text"   name="nombre"></li>
                                        <li>Que canción te gustaría escuchar o bailar : </li>
                                        <li><span>Artista :</span><input type="text"    name="artista"></li>
                                        <li><span>Canción :</span><input type="text"    name="cancion"></li>
                                        <li style="text-align:right;"><button class="btn_amarillo">Enviar</button></li>
                                    </ul>
                                </form>
                            </div>
                            <div>
                                <img src="<?php echo Yii::app()->theme->baseUrl ?>/img/musica.jpg" alt="Música">
                            </div>
                        </div>
                    </div>

                    <div class="bg-cog bottom"></div>
                </article>
            </div><!-- ./span12 -->
        </div><!-- .row -->
    </div><!-- /.container -->
</section><!-- /#music -->

<!-- how arrival Section
 ================================================== -->

<section id="agenda" class="single-page scrollblock">
    <div class="container">
        <div class="row">
            <div class="span12">
                <article>
                    <div class="bg-cog"></div>
                    <div id="diary">
                        <br /><br />
                    </div>
                    <h2>Agenda</h2>
                    <div  class="cont_1000" style="margin-top:70px;">
                        <div class="agenda_col">
                            <img src="<?php echo Yii::app()->theme->baseUrl ?>/img/agenda.png" alt="Agenda" class="agenda">
                            <img src="<?php echo Yii::app()->theme->baseUrl ?>/img/agenda.png" alt="Agenda" class="agenda">
                            <img src="<?php echo Yii::app()->theme->baseUrl ?>/img/agenda.png" alt="Agenda" class="agenda">
                        </div>
                        <div class="agenda_col">
                            <div class="agenda_item">
                                <img src="<?php echo Yii::app()->theme->baseUrl ?>/img/Agenda_1.jpg" alt="Agenda 15">
                                <h3>Clases de surf</h3>
                                <div>
                                    <p>Sayulita, Pto Vallarta </p>
                                    <p>2:00 P.M.</p>
                                </div>
                            </div>
                            <div class="agenda_item">
                                <img src="<?php echo Yii::app()->theme->baseUrl ?>/img/Agenda_2.jpg" alt="Agenda 16">
                                <h3>Misa</h3>
                                <div>
                                    <p>Playa, Hacienda San Pancho</p>
                                    <p>5:00 P.M.</p>
                                </div>
                                <h3>Recepción</h3>
                                <div>
                                    <p>Playa, Hacienda San Pancho</p>
                                    <p>8:00 P.M.</p>
                                </div>
                            </div>
                            <div class="agenda_item">
                                <img src="<?php echo Yii::app()->theme->baseUrl ?>/img/Agenda_3.jpg" alt="Agenda 17">
                                <h3>Mariscada, cocos y chelas</h3>
                                <div>
                                    <p>Beach Club, Hacienda San Pancho</p>
                                    <p>2:00 P.M.</p>
                                </div>
                                <h3>Torna boda</h3>
                                <div>
                                    <p>Playa, Hacienda San Pancho</p>
                                </div>
                            </div>
                            <div class="agenda_item">
                                <img src="<?php echo Yii::app()->theme->baseUrl ?>/img/Agenda_4.jpg" alt="Agenda 18">
                                <h3>Clases de surf</h3>
                                <div>
                                    <p>Sayulita, Pto Vallarta </p>
                                </div>
                            </div>
                            
                        </div>
                        <div class="agenda_col" style="margin-top:40px;">
                            <img src="<?php echo Yii::app()->theme->baseUrl ?>/img/agenda.png" alt="Agenda" class="agenda">
                            <img src="<?php echo Yii::app()->theme->baseUrl ?>/img/agenda.png" alt="Agenda" class="agenda">
                            <img src="<?php echo Yii::app()->theme->baseUrl ?>/img/agenda.png" alt="Agenda" class="agenda">
                        </div>
                    </div>
                    <div class="bg-cog bottom"></div>
                </article>
            </div><!-- ./span12 -->
        </div><!-- .row -->
    </div><!-- /.container -->
</section><!-- /#diary -->
<div class="footer-wrapper">
    <div class="container"> 
        <footer>
            <p><small>&copy; 2013 Otario. All rights reserved.</small></p>
        </footer>
    </div><!-- ./container -->
</div>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="assets/js/site.js"></script>

    </body>
</html>