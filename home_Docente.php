<!DOCTYPE html>
<html lang="es">
   <!-- Basic -->
   <head>
   <style>
   canvas{

width:1000px !important;
height:500px !important;

}
   </style>
      
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <!-- Site Metas -->
      <title>CEIDEUL</title>
<link rel="shortcut icon" href="images/ulibre_logo.png" />
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
      <link href="http://www.cssscript.com/wp-includes/css/sticky.css" rel="stylesheet" type="text/css">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- Pogo Slider CSS -->
      <link rel="stylesheet" href="css/pogo-slider.min.css" />
      <!-- Site CSS -->
      <link rel="stylesheet" href="css/style copy.css" />
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- Custom CSS -->
      <link rel="stylesheet" href="css/custom.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <?php
 session_start();
 if(!isset($_SESSION['user']) || $_SESSION['tipo_usuario']!=="Docente"){
	 header("Location:index.php");
	 exit(); 
 }
?>
   <body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
      <!-- LOADER -->
      <!-- <div id="preloader">
         <div class="loader">
            <img src="images/loader.gif" alt="#" />
         </div>
      </div> -->
      <!-- END LOADER -->
      <div class="wrapper">
      <nav id="sidebar">
        
         <ul class="nav__list">
         <li><a onclick="volverinicio()" style="cursor:pointer;">Inicio</a></li>
      <ul class="nav__list">
         <li>
              <input id="group-1er" type="checkbox" hidden />
              <label for="group-1er"><span class="fa fa-angle-right"></span>Sobre CEIDEUL</label>
              <ul class="group-list">
              <li style="background-color:#353535;"><a href="sc_catedra_emprendimieto.php">Cátedra de emprendimiento</a></li>
              <li style="background-color:#353535;"><a href="sc_elevator_pitch.php">Elevator Pitch</a></li>
              <li style="background-color:#353535;"><a href="sc_feria_empresarial.php">Feria empresarial</a></li>
              <li style="background-color:#353535;"><a href="sc_opcion_grado.php">Opción de grado creación de empresa</a></li>
              <li style="background-color:#353535;"><a href="sc_proyeccion_social.php">Proyección social</a></li>
              <li style="background-color:#353535;"><a href="sc_consultorio.php">Consultorio</a></li>
              <li style="background-color:#353535;"><a href="sc_asesoria.php">Asesoría</a></li>
              <li style="background-color:#353535;"><a href="sc_innovacion.php">Innovación</a></li>
              <!--Extensión-->
              <!--Clúster Fami-Pyme-->
                <li>
                </li>
              </ul>
      <li><a href="Admin_forms.php">Ver registros</a></li>
      <li><a href="ver_comentarios.php">Notificaciones</a></li>
         <ul class="nav__list">
         <li>
              <input id="group-1" type="checkbox" hidden />
              <label for="group-1"><span class="fa fa-angle-right"></span>Mi perfil</label>
              <ul class="group-list">
              <li style="background-color:#353535;"><a href="Editar_Perfil.php">Editar Perfil</a></li>
                <li><a href="index.php" style="background-color:#353535;">Cerrar sesión</a></li>
                <li>
                </li>
              </ul>
            </li>

 

            <!-- <label for="group-3"><span class="fa fa-angle-right"></span> First level</label>
            <ul class="group-list">
              <li>
              <li><a href="#">1st level item</a></li>
              <li><a href="#">1st level item</a></li>
              <input id="sub-group-3" type="checkbox" hidden />
              <label for="sub-group-3"><span class="fa fa-angle-right"></span> Second level</label>
              <ul class="sub-group-list">
                <li><a href="#">2nd level nav item</a></li>
                <li><a href="#">2nd level nav item</a></li>
                <li><a href="#">2nd level nav item</a></li>
                <li>
                  <input id="sub-sub-group-3" type="checkbox" hidden />
                  <label for="sub-sub-group-3"><span class="fa fa-angle-right"></span> Third level</label>
                  <ul class="sub-sub-group-list">
                    <li><a href="#">3rd level nav item</a></li>
                    <li><a href="#">3rd level nav item</a></li>
                    <li><a href="#">3rd level nav item</a></li>
                  </ul>
                </li>
              </ul>
              </li>
            </ul>
            </li>
            <li>
            <input id="group-4" type="checkbox" hidden />
            <label for="group-4"><span class="fa fa-angle-right"></span> Elevator Pitch</label>
            <ul class="group-list">
              <li>
              <li><a href="#">1st level item</a></li>
              <input id="sub-group-4" type="checkbox" hidden />
              <label for="sub-group-4"><span class="fa fa-angle-right"></span> Second level</label>
              <ul class="sub-group-list">
                <li><a href="#">2nd level nav item</a></li>
                <li><a href="#">2nd level nav item</a></li>
              </ul>
              </li>
            </ul>
            </li>
            <ul class="group-list">
               <li>
               <li><a href="#">1st level item</a></li>
               <input id="sub-group-4" type="checkbox" hidden />
               <label for="sub-group-4"><span class="fa fa-angle-right"></span> Second level</label>
               <ul class="sub-group-list">
                 <li><a href="#">2nd level nav item</a></li>
                 <li><a href="#">2nd level nav item</a></li>
               </ul>
               </li>
             </ul>
          </ul> -->
          <li>
            <input id="group-2" type="checkbox" hidden  />
            <label for="group-2"><span class="fa fa-angle-right"></span>Formularios</label>
            <ul class="group-list">
              <li>
                <input id="sub-group-2" type="checkbox" hidden onclick="onhandleformularios('sub-group-2')" />
                <label for="sub-group-2" style="background-color: #aa1a1a6c;"><span class="fa fa-angle-right"></span> Asesoría y Consultoría</label>
                <ul class="sub-group-list">

                <li>
                     
                     <input id="sub-sub-group-2" type="checkbox" hidden />
                     <label for="sub-sub-group-2"><span class="fa fa-angle-right"></span>asesoría y consultoría empresarial</label>
                     <ul class="sub-sub-group-list" style="font-size: 12px;">
                       <li><a href="forms/f_diagAsesoria.php" target="_blank">Formato de Diagnostico Para Asesoría Empresarial</a></li>
                       <li><a href="forms/f_inicioAsesoriaEmp.php" target="_blank">Formato de Inicio de Asesoría Empresarial</a></li>
                       <li><a href="forms/f_EntregaAsesoria.php" target="_blank">Formato de Entrega de Asesoría</a></li>
                     </ul>
                   </li>
                   <li>
                      
                      <input id="sub-sub-group-3" type="checkbox" hidden />
                      <label for="sub-sub-group-3"><span class="fa fa-angle-right"></span>herramientas para la asesoría y consultoría empresarial</label>
                   <ul class="sub-sub-group-list" style="font-size: 12px;">
                        <li><a href="forms/f_DiagAppOfimatica.php" target="_blank">Formato de Diagnostico de Aplicaciones Ofimaticas E Informatica</a></li>
                        <li><a href="forms/f_AnalisisDisePtrabajo.php" target="_blank">Formato de Análisis Para El Diseño de Puestos de Trabajo</a></li>
                        <li><a href="forms/f_perfilacion.php" target="_blank">Formato de Perfilación de Puestos de Trabajo</a></li>
                        <li><a href="forms/f_analisisEntorno.php" target="_blank">Formato de análisis Del Entorno</a></li>
                        <li><a href="forms/f_BalanceScoreCard.php" target="_blank">Formato de Balance Scorecard</a></li>
                        <li><a href="forms/f_identificacionMercado.php" target="_blank">Formato de Identificación de Mercado</a></li>
                        <li><a href="forms/f_ishikawa.php" target="_blank">Formato de Diagrama de Ishikawa / Espina de Pescado</a></li>
                        <li><a href="forms/f_CaracterizacionProcesos.php" target="_blank">Formato de Caracterización de Procesos</a></li>
                        <li><a href="forms/f_EvaluacionMarcoEstrategico.php" target="_blank" >Formato de Evaluación de Marco Estratégico</a></li>
                        <li><a href="forms/f_DiagInterno.php" target="_blank">Formato de Diagnostico Interno</a></li>
                        <li><a href="forms/f_Dofa.php" target="_blank">Formato de Matriz Dofa</a></li>
                        <li><a href="forms/f_CadenaValor.php" target="_blank">Formato de Cadena de Valor</a></li>
                        <li><a href="forms/f_Canvas.php" target="_blank">Formato de Modelo Canvas</a></li>
                        <li><a href="forms/f_SolicitudAccionesPreventivas.php" target="_blank">Formato de Solicitud de Acciones Preventivas Y de Mejora</a></li>
                      </ul>
                    </li>
                 </ul>
 
                 


               

               

                 <input id="sub-group-8" type="checkbox" hidden onclick="onhandleformularios('sub-group-8')"/>
                <label for="sub-group-8" style="background-color: #aa1a1a6c;"><span class="fa fa-angle-right"></span> Feria Empresarial</label>
                <ul class="sub-group-list">
                   <li><a href="forms/f_inscripcionFeriaEmpresarial.php" target="_blank">Formato Inscripción Feria Empresarial</a></li>
                  <li><a href="forms/f_ProtocoloExpositores.php" target="_blank">Formato Protocolo Expositores Feria Empresarial</a></li>
                  <li><a href="forms/f_formatoInventarioFeriaEmpresarial.php" target="_blank">Formato de Inventario Feria Empresarial</a></li>
                  <li>
                     
                    <input id="sub-sub-group-9" type="checkbox" hidden />
                    <label for="sub-sub-group-9"><span class="fa fa-angle-right"></span>Evaluación Empresarial</label>
                    <ul class="sub-sub-group-list" style="font-size: 12px;">
                      <li><a href="forms/f_evaluacionFeriaEmpresarial.php" target="_blank">Formato de Evaluación Feria Empresarial</a></li>
                      <li><a href="f_satisfaccionDelExpositor.php" target="_blank">Formato de Satisfacción Del Expositor</a></li>
                    </ul>
                  </li>
                </ul>




           






              </li>
            </ul>
          </li>

      </nav>
      <div id="content">


         <iframe src="forms/form_inicio.html" id="frameforms" width="100%" height="100%" hidden></iframe>
         <!-- Start header -->
         <div class="header">
          
            <p onclick="volverinicio()" style="cursor:pointer;"><img src="images/ceideul_logo4.png" /></p>
               
  <div class="header-right">
    <p id="txtnombre" style="padding: 12px;"></p>
    <a style="font-size:45px; cursor:pointer; " id="sidebarCollapse">≡</a>
  </div>
</div>
         <!-- End header -->
         <!-- Start Banner -->
         <div class="ulockd-home-slider">
            <div class="container-fluid">
               <div class="row">
                  <div class="pogoSlider" id="js-main-slider">
                     <div class="pogoSlider-slide" style="background-image:url(images/slider_sinfoto.png); margin-bottom:500px;">
                        <div class="container">
                           <div class="row">
                             
                           <div class="form-row">
  <div class="form-group col-md-6" style="width:1400px;">

                                 <div class="slide_text" style="margin-top: 80px;" >
                                   
                                    <h3 style="color: #aa1a1a;">CEIDEUL</h3>
                                    <h6 style="font-size: 30px; color: #aa1a1a;" >Centro de Emprendimiento, Innovación y Desarrollo Empresarial</h6>
                                    <br>
                                    <a class="readmore_btred" href="http://www.unilibre.edu.co/bogota/ul/noticias/noticias-universitarias/1759-gaceta-empresarial" target="_blank">Gaceta Empresarial</a>
                                 </div>
                     
    </div>
    <div class="form-group col-md-6" style="width:800px;">
    <div class="slide_text" style="margin-top: 80px;" >
                                    <h6 style="font-size: 20px; color: #aa1a1a;" ></h6>
                                    <h3 style="color: #aa1a1a; margin-left:175px;" id="numregistros">0</h3>
                                    <h6 style="font-size: 30px; color: #aa1a1a;" >Formularios registrados</h6>
                                    <br>
                                   
    </div>
  </div>
                           </div>
                        </div>
                     </div>
                     </div>
                     <div class="pogoSlider-slide" style="background-image:url(images/slider_sinfoto.png); margin-bottom:500px;">
                        <div class="container">
                           <div class="row">
                             
                           <div class="form-row">
  <div class="form-group col-md-6" style="width:1400px;">

                                 <div class="slide_text" style="margin-top: 80px;" >
                                   
                                    <h3 style="color: #aa1a1a;">CEIDEUL</h3>
                                    <h6 style="font-size: 30px; color: #aa1a1a;" >Centro de Emprendimiento, Innovación y Desarrollo Empresarial</h6>
                                    <br>
                                    <a class="readmore_btred" href="http://www.unilibre.edu.co/bogota/ul/noticias/noticias-universitarias/1759-gaceta-empresarial" target="_blank">Gaceta Empresarial</a>
                                 </div>
                     
    </div>
    <div class="form-group col-md-6" style="width:800px;">
    <div class="slide_text" style="margin-top: 80px;" >
                                    <h6 style="font-size: 20px; color: #aa1a1a;" ></h6>
                                    <h3 style="color: #aa1a1a; margin-left:175px;" id="numregistros2">0</h3>
                                    <h6 style="font-size: 30px; color: #aa1a1a;" >Formularios registrados</h6>
                                    <br>
                                   
    </div>
  </div>
                           </div>
                        </div>
                     </div>
                     </div>
                  
                  </div>
                  <!-- .pogoSlider -->
               </div>
            </div>
         </div>
         <!-- End Banner -->
         <!-- section -->
         <!-- <div class="section about_section layout_padding dash_bg">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center">
                           <h2>What We Do</h2>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                     <div class="full feature_box">
                         <div class="full icon">
                            <img class="default-block" src="images/icon_1.png" alt="#" />
                            <img class="default-none" src="images/icon_1w.png" alt="#" />
                         </div>
                         <div class="full">
                            <h4>Link Building</h4>
                         </div>
                         <div class="full">
                           <p>It is a long established fact that a reader will be distracted by the readable content..</p>
                         </div>
                     </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                     <div class="full feature_box">
                         <div class="full icon">
                            <img class="default-block" src="images/icon_2.png" alt="#" />
                            <img class="default-none" src="images/icon_2w.png" alt="#" />
                         </div>
                         <div class="full">
                            <h4>Monthly SEO Task</h4>
                         </div>
                         <div class="full">
                           <p>It is a long established fact that a reader will be distracted by the readable content..</p>
                         </div>
                     </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                     <div class="full feature_box">
                         <div class="full icon">
                            <img class="default-block" src="images/icon_3.png" alt="#" />
                            <img class="default-none" src="images/icon_3w.png" alt="#" />
                         </div>
                         <div class="full">
                            <h4>On Page SEO</h4>
                         </div>
                         <div class="full">
                           <p>It is a long established fact that a reader will be distracted by the readable content..</p>
                         </div>
                     </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                     <div class="full feature_box">
                         <div class="full icon">
                            <img class="default-block" src="images/icon_4.png" alt="#" />
                            <img class="default-none" src="images/icon_4w.png" alt="#" />
                         </div>
                         <div class="full">
                            <h4>Online marketing</h4>
                         </div>
                         <div class="full">
                           <p>It is a long established fact that a reader will be distracted by the readable content..</p>
                         </div>
                     </div>
                  </div>
               </div>
            </div>
         </div> -->
         <!-- end section -->
         <!-- section -->





 <!-- section -->
 <div class="section about_section layout_padding padding_top_0">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center margin-bottom_30">
                           <h2><br> usuarios registrados</h2>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-10 offset-lg-1" style="">
                  <canvas id="myChart"></canvas>
                  </div>
               </div>
               <br>
             
            </div>
         </div>
         <!-- end section -->

<!-- section -->
<div class="section about_section layout_padding padding_top_0">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center margin-bottom_30">
                           <h2><br>Cantidad de formularios registrados</h2>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-10 offset-lg-1" style="">
                  <canvas id="chartForms"></canvas>
                  </div>
               </div>
               <br>

               </div>
            </div>
         </div>
         <!-- end section -->
<!-- section -->
<div class="section about_section layout_padding padding_top_0">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center margin-bottom_30">
                           <h2><br>Registros de formatos por seccional</h2>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-10 offset-lg-1" style="">
                  <canvas id="chartSeccional"></canvas>
                  </div>
               </div>
               <br>

               </div>
            </div>
         </div>
         <!-- end section -->







         


      
         <!-- section -->
         <!-- <div class="section dark_blue_layout white_fonts layout_padding">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 col-lg-4">
                     <div class="full">
                        <div class="heading_main text_align_left" style="margin-bottom: 0;">
                           <h2><strong class="small">Get your  free quote</strong><br>Today</h2>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 col-lg-8">
                     <div class="full">
                         <div class="form_section">
                            <form class="news_submit_form">
                              <fieldset>
                                 <div class="field">
                                    <input type="email" placeholder="Enter url" name="#" required />
                                    <button>Submit</button>
                                 </div>
                              </fieldset>
                            </form>
                         </div>
                     </div>
                  </div>
               </div>
            </div>
         </div> -->
         <!-- end section -->
         <!-- section -->
         <!-- <div class="section about_section layout_padding">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center margin-bottom_30">
                           <h2><strong class="small theme_color">We’ve done lot’s of work, Let’s</strong><br>Check some from here</h2>
                        </div>
                     </div>
                  </div>
               </div>
              <div class="row">

                <div class="col-sm-6 col-md-3 col-lg-3">
                   <div class="work_blog margin-top_30">
                      <img class="img-responsive" src="images/blog1.jpg" alt="#" />
                      <div class="hover_workblog">
                          <img src="images/search_icon.png" alt="#" />
                      </div>
                   </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3">
                   <div class="work_blog margin-top_30">
                      <img class="img-responsive" src="images/blog2.jpg" alt="#" />
                      <div class="hover_workblog">
                          <img src="images/search_icon.png" alt="#" />
                      </div>
                   </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3">
                   <div class="work_blog margin-top_30">
                      <img class="img-responsive" src="images/blog3.jpg" alt="#" />
                      <div class="hover_workblog">
                          <img src="images/search_icon.png" alt="#" />
                      </div>
                   </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3">
                   <div class="work_blog margin-top_30">
                      <img class="img-responsive" src="images/blog4.jpg" alt="#" />
                      <div class="hover_workblog">
                          <img src="images/search_icon.png" alt="#" />
                      </div>
                   </div>
                </div>

              </div>
            </div>
         </div> -->
         <!-- end section -->
         <!-- section -->
         <!-- <div class="section about_section layout_padding padding_top_0">
            <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center margin-bottom_30">
                           <h2>Get in touch</h2>
                        </div>
                     </div>
                  </div>
               </div>
         </div> -->
         <!-- section -->
         <!-- <div class="section contact_section">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-6 theme_color_bg fc3726 padding_0">
                     <div class="full">
                        <div class="row">
                           <div class="col-sm-12 col-md-10 offset-lg-1">
                              <div class="full contact_form">
                                 <form class="contact_form_inner" action="#">
                                    <fieldset>
                                       <div class="field">
                                          <input type="text" name="name" placeholder="Your name" />
                                       </div>
                                       <div class="field">
                                          <input type="email" name="email" placeholder="Email" />
                                       </div>
                                       <div class="field">
                                          <input type="text" name="phone_no" placeholder="Phone number" />
                                       </div>
                                       <div class="field">
                                          <textarea placeholder="Message"></textarea>
                                       </div>
                                       <div class="field center">
                                          <button class="margin-top_30">SEND</button>
                                       </div>
                                    </fieldset>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 padding_0">
                     <div class="full">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="full map_section">
                                 <div id="map">
                                    <div id="googleMap" style="width:100%;height:440px;"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div> -->
         <!-- end section -->
         <!-- Start Footer -->
         <footer class="footer-box" >
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center white_fonts margin-bottom_30">
                           <h2>Centro de Emprendimiento, Innovación y Desarrollo Empresarial de la Universidad Libre (CEIDEUL)</h2>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row" >
                  
                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts"  >
                     <div class="full footer_blog f_icon_1">
                         <p>Dirección<br><small>Carrera 70 No. 53-40<br>Bogotá, Colombia</small></p>
                     </div>
                  </div>

               <div class="col-lg-3 col-md-6 col-sm-6 white_fonts"> 
                     <div class="full footer_blog f_icon_2">
                        <p>Teléfono<br><small>423 27 00<br>Ext. 1812</small></p>
                     </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog f_icon_3">
                         <p>E-mail<br><small>ceideul@unilibre.edu.co</small></p>
                     </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog_last">
                         <p>Derechos de autor</p>
                         <p><small>
                           Copyright © 2020 Unilibre Institución de Educación Superior sujeta a inspección y vigilancia por el Ministerio de Educación</small>
                         </p>
                     </div>
                  </div>
              
               </div>
            </div>
         </footer>
         <!-- End Footer -->
         <div class="footer_bottom">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <p class="crp">Universidad Libre</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>
      <!-- ALL JS FILES -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- ALL PLUGINS -->
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/jquery.pogo-slider.min.js"></script>
      <script src="js/slider-index.js"></script>
      <script src="js/smoothscroll.js"></script>
      <script src="js/form-validator.min.js"></script>
      <script src="js/contact-form-script.js"></script>
      <script src="js/isotope.min.js"></script>
      <script src="js/images-loded.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="js/rutinas.js"></script>
      <!-- End Google Map -->
      <script>
         $(document).ready(function() {
           $('#sidebarCollapse').on('click', function() {
             $('#sidebar, #content').toggleClass('active');
             $('.collapse.in').toggleClass('in');
             $('a[aria-expanded=true]').attr('aria-expanded', 'false');
           });
         });
                  function onhandleformularios(idformulario){

            var ids=["sub-group-2","sub-group-3","sub-group-6","sub-group-8","sub-group-10"];


            $.each(ids, function( index, value ) {

              if(value!==idformulario){
               $("#"+value).prop("checked", false);
               
              }  
            
            });

           
         }
      </script>
<script>
document.getElementById("txtnombre").innerHTML = '<?php echo $_SESSION['nombres'].' '.$_SESSION['apellidos']; ?>';
function volverinicio(){
   var tipo='<?php echo $_SESSION['tipo_usuario']?>';
   if(tipo=="Estudiante"){
      window.location="home_Estudiante.php";
   }else if(tipo=="Egresado"){
      window.location="home_Egresado.php";
   }else if(tipo=="Docente"){
      window.location="home_Docente.php";
   }else if(tipo=="Externo"){
      window.location="home_Externo.php";
}
else if(tipo=="Admin"){
      window.location="home_Admin.php";
}
}
 </script>  
 <script type="text/javascript" src="js/Chart.bundle.min.js"></script>
 <script>
 <?php 
require_once "php/conexion.php";
$conexion=conexion();
$sqlEst="SELECT * FROM tb_usuarios WHERE tipo_usuario='Estudiante'";
$sqlDoc="SELECT * FROM tb_usuarios WHERE tipo_usuario='Docente'";
$sqlEgre="SELECT * FROM tb_usuarios WHERE tipo_usuario='Egresado'";
$sqlExt="SELECT * FROM tb_usuarios WHERE tipo_usuario='Externo'";
$array;
if ($result=mysqli_query($conexion,$sqlEst))
  {
     
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  $array[]=$rowcount;

  // Free result set

  }

  if ($result=mysqli_query($conexion,$sqlDoc))
  {
     
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  $array[]=$rowcount;

  // Free result set

  }

  if ($result=mysqli_query($conexion,$sqlEgre))
  {
     
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  $array[]=$rowcount;

  // Free result set

  }

  if ($result=mysqli_query($conexion,$sqlExt))
  {
     
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  $array[]=$rowcount;

  // Free result set

  }

?>

        </script>
<script>
var foo = <?php echo json_encode($array); ?>;




              var ctx = document.getElementById("myChart");
              var myChart = new Chart(ctx, {
                  type: 'horizontalBar',
                  data: {
                      labels: ["Estudiantes", "Docentes", "Egresados","Externos"],
                      datasets: [{
                          label: 'Tipos de usuario',
                          backgroundColor: ["#931515", "#154593", "#118013", "#C2C719"],
                          data: foo,
                        
                      }]
                  },
                

                  options: {
    scales: {
        xAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    },
    legend: {
        display: false
    }
}

              });

</script>






<script>
 <?php 
require_once "php/conexion.php";
$conexion=conexion();
$sql="SELECT formulario, count(*) FROM tb_formularios WHERE formulario is not null group by formulario";

$resultform=mysqli_query($conexion,$sql);


$data = array();
while($row = $resultform->fetch_assoc())
{
    $data[] = $row;
}
  

  

?>

</script>

<script>
var formarray = <?php echo json_encode($data); ?>;
var nombreforms = new Array();
var countforms = new Array();
var colores = [];
function randDarkColor() {
    var lum = -0.25;
    var hex = String('#' + Math.random().toString(16).slice(2, 8).toUpperCase()).replace(/[^0-9a-f]/gi, '');
    if (hex.length < 6) {
        hex = hex[0] + hex[0] + hex[1] + hex[1] + hex[2] + hex[2];
    }
    var rgb = "#",
        c, i;
    for (i = 0; i < 3; i++) {
        c = parseInt(hex.substr(i * 2, 2), 16);
        c = Math.round(Math.min(Math.max(0, c + (c * lum)), 255)).toString(16);
        rgb += ("00" + c).substr(c.length);
    }
    return rgb;
}
for(var i = 0; i < formarray.length; i++) {
    var obj = formarray[i];
    nombreforms.push(obj.formulario);
    countforms.push(obj['count(*)']);
    colores.push(randDarkColor());
}




var pieOptions = {
  events: false,
  animation: {
    duration: 500,
    easing: "easeOutQuart",
    onComplete: function () {
      var ctx = this.chart.ctx;
      ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontFamily, 'normal', Chart.defaults.global.defaultFontFamily);
      ctx.textAlign = 'center';
      ctx.textBaseline = 'bottom';

      this.data.datasets.forEach(function (dataset) {

        for (var i = 0; i < dataset.data.length; i++) {
          var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model,
              total = dataset._meta[Object.keys(dataset._meta)[0]].total,
              mid_radius = model.innerRadius + (model.outerRadius - model.innerRadius)/2,
              start_angle = model.startAngle,
              end_angle = model.endAngle,
              mid_angle = start_angle + (end_angle - start_angle)/2;

          var x = mid_radius * Math.cos(mid_angle);
          var y = mid_radius * Math.sin(mid_angle);

          ctx.fillStyle = '#fff';
          if (i == 3){ // Darker text color for lighter background
            ctx.fillStyle = '#444';
          }
          var percent = String(Math.round(dataset.data[i]/total*100)) + "%";
          ctx.fillText(dataset.data[i], model.x + x, model.y + y);
          // Display percent in another line, line break doesn't work for fillText
          ctx.fillText(percent, model.x + x, model.y + y + 15);
        }
      });               
    }
  }
};






var ctx = document.getElementById("chartForms").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: nombreforms,
    datasets: [{
      backgroundColor: colores,
      data: countforms
    }]
  }

});
</script>





<script>
 <?php 
require_once "php/conexion.php";
$conexion=conexion();
$sql="SELECT seccional, count(*) FROM tb_formularios WHERE seccional is not null group by seccional";

$resultform=mysqli_query($conexion,$sql);


$datasec = array();
while($rowsec = $resultform->fetch_assoc())
{
    $datasec[] = $rowsec;
}
  

  

?>

        </script>
<script>
var secarray = <?php echo json_encode($datasec); ?>;
var nombresec = new Array();
var countsec = new Array();


for(var i = 0; i < secarray.length; i++) {
    var obj = secarray[i];
    debugger
    nombresec.push(obj.seccional);
    countsec.push(obj['count(*)']);
}


              var ctx = document.getElementById("chartSeccional");
              var myChart = new Chart(ctx, {
                  type: 'bar',
                  data: {
                      labels: nombresec,
                      datasets: [{
                          label: 'Cantidad de formularios registrados',
                          backgroundColor: ["#931515", "#154593", "#118013", "#C2C719"],
                          data: countsec,
                        
                      }]
                  },
                

                  options: {
    scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    },
    legend: {
        display: false
    }
}

              });

</script>





<script>
 <?php 
require_once "php/conexion.php";
$conexion=conexion();
$sqlEst="SELECT * FROM tb_formularios";
if ($result=mysqli_query($conexion,$sqlEst))
  {
     
  // Return the number of rows in result set
  $numeroforms=mysqli_num_rows($result);
  // Free result set

  }
  ?>
var numeroForms = <?php echo json_encode($numeroforms); ?>;
  $("#numregistros").text(numeroForms);
  $("#numregistros2").text(numeroForms);
  </script>





   </body>
</html>
