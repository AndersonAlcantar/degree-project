<!DOCTYPE html>
<?php
 session_start();
 if(!isset($_SESSION['user'])){
	 header("Location:../index.php");
	 exit(); 
 }
?>
<html lang="es">
<head>
<style>
  .required:after {
    content:" *";
    color: red;
  }
</style>
<link rel="shortcut icon" href="../images/ulibre_logo.png" />
<link rel="stylesheet" type="text/css" href="../js/alertifyjs/css/themes/default.css">
<link rel="stylesheet" type="text/css" href="../js/alertifyjs/css/alertify.css">
<script src="../js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/mdb.min.css" />
<script src="../js/alertifyjs/alertify.js"></script>
<script src="../js/alertifyjs/mdb.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/styleform2.css">
  <title>CEIDEUL</title>
</head>
<body>
<p></p>
<form class="form" id="form1" action="./" method="POST">
<div id="pag1">
  <!--Titulo princiapl-->
  <div style="">
<div class="form__title" style="font-weight:bold; font-size:25px"><a id="nombre_form">FORMATO DE SOLICITUD DE ACCIONES PREVENTIVAS Y DE MEJORA</a></div>
<p style="color: red;">FOR-GE-006</p>
</div>
<hr style="color:red; background-color:red;">
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="txtnombre" class="required">Nombre</label>
      <input type="text" class="form-control" id="txtnombre" placeholder="Email" required disabled>
    </div>
    <div class="form-group col-md-6">
      <label for="txtcorreo" class="required">Email</label>
      <input type="text" class="form-control" id="txtcorreo" placeholder="" required disabled>
    </div>
  </div>

<hr>
  <!--label&textarea-->

  <div class="form-row">

  <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">NOMBRE DE QUIEN VISITA</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">CARGO / ??REA</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
    </div>

  </div>
  <hr>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">TIPO DE ACCI??N</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">No. ACCI??N</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
    </div>

  </div>
  <hr>
  <div class="form-row">

<div class="form-group col-md-6">
    <label for="inputEmail4" class="required">??REA DONDE SE DETECTA LA NO CONFORMIDAD O POTENCIAL PROBLEMA </label>
    <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
  </div>
  <div class="form-group col-md-6">
    <label for="inputEmail4" class="required">RESPONSABLE DEL PROCESO</label>
    <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
  </div>

</div>

<hr>

<div class="form-row">
<div class="form-group col-md-6">
    <label for="inputEmail4" class="required">FUENTE </label>
    <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
  </div>
  <div class="form-group col-md-6">
    <label for="inputEmail4" class="required">FECHA DE DETECCI??N </label>
    <input type="date" class="form-control" id="inputEmail4" placeholder="" required>
  </div>

</div>

<hr>

<div class="form-row">
<div class="form-group col-md-6">
    <label for="exampleFormControlSelect1" class="required">1. Descripci??n de la no conformidad o del Potencial problema: </label>
    <textarea class="form-control" id="inputEmail4" rows="3" style="white-space: pre-wrap;" required></textarea>
    </div>
  <div class="form-group col-md-6">
    <label for="inputEmail4" class="required">Nombre y cargo de quien detecta la no conformidad </label>
    <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
  </div>

</div>

<hr>



<div class="form-row">
<div class="form-group col-md-6">
    <label for="inputEmail4" class="required">Nombre y cargo del responsable donde de detecta la no conformidad  </label>
    <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
  </div>
  <div class="form-group col-md-6">
    <label for="exampleFormControlSelect1" class="required">2. An??lisis de la causa</label>
    <textarea class="form-control" id="inputEmail4" rows="3" style="white-space: pre-wrap;" required></textarea>
    </div>

</div>

<hr>


<div class="form-row">
<div class="form-group col-md-6">
    <label for="exampleFormControlSelect1" class="required">3. Metodolog??a utilizada para detectarla</label>
    <textarea class="form-control" id="inputEmail4" rows="3" style="white-space: pre-wrap;" required></textarea>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="">EVIDENCIA</label>
      <input type="file" name="yourfieldnamehere" class="form-control" id="inputfile" placeholder="" >
    </div>

</div>

<hr>


<div class="form-row">
<div class="form-group col-md-6">
    <label for="exampleFormControlSelect1" class="required">4. Plan de acci??n: Actividades </label>
    <textarea class="form-control" id="inputEmail4" rows="3" style="white-space: pre-wrap;" required></textarea>
    </div>
    <div class="form-group col-md-6">
    <label for="exampleFormControlSelect1" class="required">ACCIONES CORRECTIVAS (Descripci??n detallada) </label>
    <textarea class="form-control" id="inputEmail4" rows="3" style="white-space: pre-wrap;" required></textarea>
    </div>

</div>

<hr>


<div class="form-row">
<div class="form-group col-md-6">
      <label for="inputEmail4" class="required">RESPONSABLES DEL PROCESO</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="">??SE LE DI?? CIERRE?</label>
      <select class="form-control" id="exampleFormControlSelect1" >
      <option></option>
      <option>SI</option>
      <option>NO</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden required>
    </div>

</div>

<hr>



<div class="form-row">
<div class="form-group col-md-6">
      <label for="inputEmail4" class="">FECHA DE CIERRE DE LA NO CONFORMIDAD</label>
      <input type="date" class="form-control" id="inputEmail4" placeholder="" >
    </div>
    <div class="form-group col-md-6">
    <label for="exampleFormControlSelect1" class="required">Verificaci??n, Validaci??n y seguimiento de la acci??n tomada: Actividades y Estado de la misma</label>
    <textarea class="form-control" id="inputEmail4" rows="3" style="white-space: pre-wrap;" required></textarea>
    </div>

</div>

<hr>


<div class="form-row">
<div class="form-group col-md-6">
      <label for="inputEmail4" class="">EVIDENCIA CIERRE DE LA ACCI??N</label>
      <input type="file" name="yourfieldnamehere" class="form-control" id="inputfile2" placeholder="" >
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="">EFECTIVIDAD</label>
      <select class="form-control" id="exampleFormControlSelect1" >
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden required>
    </div>

</div>

<hr>


<div class="form-row">
<div class="form-group col-md-6">
    <label for="exampleFormControlSelect1" class="">OBSERVACIONES</label>
    <textarea class="form-control" id="inputEmail4" rows="3" style="white-space: pre-wrap;" ></textarea>
    </div>
    <div class="form-group col-md-6">
    <label for="exampleFormControlSelect1" class=""> </label>
  
    </div>

</div>

<hr>


  <!--bot??n enviar-->
  <div class="form__item">
    <button class="btn btn-success" type="button" id="botonenviar">Enviar</button>
  </div>
</form>

</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="../js/FileSaver.js"></script>
<script src="../js/jquery.wordexport.js"></script>
<script>
 function invisibleradio(){
  $(".grupordbuttons").each(function(){
 $(this).remove(); //traigo todos los radio button
});
 }



 function verificarvacio(){

var retorno=true;
  $(".form-row").each(function(){

var dentrorow=$(this).children();
$.each(dentrorow,function(index,value){

  if($(this).get(0).tagName=="DIV"){
    var columna=$(this).children();
    $.each(columna,function(index,value){
     

    var tipocontrol=$(this).get(0).tagName;
  
   
switch(tipocontrol){
case "INPUT":
case "SELECT":
case "TEXTAREA":
var valor=$(this).val();
if(valor=="" && $(this).is(":visible") && $(this).prop('required')){
  $(this).css({"border": "2px solid red", "border-radius": "4px"});
  retorno= false;
}else{

  $(this).css({"border": "", "border-radius": ""});
}
break;
}
    })




  }
  
})


});
return retorno;
}




function addrespuesta(){
  $(".form-row").each(function(){

var dentrorow=$(this).children();
$.each(dentrorow,function(index,value){

  if($(this).get(0).tagName=="DIV"){
    var columna=$(this).children();
    $.each(columna,function(index,value){
      var that=$(this);

    var tipocontrol=$(this).get(0).tagName;
  
   
switch(tipocontrol){
 case "INPUT":
 case "SELECT":
case "TEXTAREA":
  var elem2 = document.createElement('label');
    elem2.style.color="red";
    elem2.style.whiteSpace="pre-wrap";
  var tipo=($(this).prop('type'));
  console.log(tipo);
  if(tipo!=="file"){
    var valor=$(this).val();
 var valorspace= valor.replace(/(\r\n|\n|\r)/gm, "<br />");
elem2.innerHTML = valorspace; 
that.append(elem2);
  }

break;
}
    })




  }
  
})


});
}




  </script>
<script>

$(document).ready(function(){
    $("select").change(function(){
        var selected = $(this).children("option:selected").val();
        
        if(selected=="Otro:"){
         $(this).closest('div').find("input").attr("hidden",false); 
         $(this).closest('div').find("input").val("");

         
        }else{

          $(this).closest('div').find("input").attr("hidden",true); 
          $(this).closest('div').find("input").val(selected);
        }


    });
});

</script>
<script>

$('#txtnombre').val('<?php echo $_SESSION['nombres'].' '.$_SESSION['apellidos']; ?>');
$('#txtcorreo').val('<?php echo $_SESSION['user']; ?>');
document.getElementById("botonenviar").addEventListener ("click", Ongeneratepdf, false);






  function Ongeneratepdf(){
    if(verificarvacio()==true){
      addrespuesta();
      var doc = new jsPDF();
var elementHTML = document.body;
var specialElementHandlers = {
    '#elementH': function (element, renderer) {
        return true;
    }
};
doc.fromHTML(elementHTML, 15, 15, {
    'width': 170,
    'elementHandlers': specialElementHandlers
});

// Save the PDF
var pdf =doc.output();
var nombres='<?php echo $_SESSION['nombres'].' '.$_SESSION['apellidos']; ?>';
var correo='<?php echo $_SESSION['user']?>';
var tipousuario='<?php echo $_SESSION['tipo_usuario']?>';
var nombreform=filenamesinpunto;
var nombreform_completo=$("#nombre_form").text();
var d=new Date();
var mes=d.getMonth()+1
var fecha=d.getDate()+" "+mes+" "+d.getFullYear()+"_"+d.getHours()+"-"+d.getMinutes()+"-"+d.getSeconds();
var nombrearchivo=fecha+"_"+nombres+"_"+nombreform;
var seccional='<?php echo $_SESSION['seccional']?>';
var filelength=document.getElementById("inputfile").files.length;
var filelength2=document.getElementById("inputfile2").files.length;


 var formData = new FormData();
  formData.append("file", file);
  formData.append("nombres", nombres);
  formData.append("correo", correo);
  formData.append("nombreform", nombreform);
  formData.append("tipousuario", tipousuario);
  formData.append("nombreform_completo", nombreform_completo);
  formData.append("nombrearchivo", nombrearchivo);
  formData.append("fecha", fecha);
  formData.append("pdf", pdf);
  formData.append("seccional", seccional);

if(filelength>0){
  var file = document.getElementById("inputfile").files[0];
var filename = document.getElementById("inputfile").files[0].name;
  formData.append("file", file);
  formData.append("filename", filename);

}

if(filelength2>0){
  var file2 = document.getElementById("inputfile2").files[0];
var filename2 = document.getElementById("inputfile2").files[0].name;
  formData.append("file2", file2);
  formData.append("filename2", filename2);

}



$.ajax({
						type:"POST",
						url:"../php/subir_form.php",
						data: formData,
            contentType: false,
						processData: false,
						cache: false, 
						success:function(r){
                if(r==1){
                  alertify.alert('Formulario enviado con ??xito').set('onok', function(closeEvent){ 
                    window.close();

									} ).setHeader('<em>  </em> '); 

                }else if(r==2){
                  alertify.alert('Este formulario ya fu?? registrado por el usuario').setHeader('<em>  </em> '); 
                }else if(r==3){
                  alertify.alert('error en conexi??n').setHeader('<em>  </em> '); 
                }
            }						
					});
    
    }else{
      alert('Por favor llenar todos los campos obligatorios'); 
    }

  }

</script>
<script>
var loc = window.location.pathname;


var index = loc.lastIndexOf("/") + 1;
var filename = loc.slice(index);
var filenamesinpunto= filename.substr(0, filename.indexOf('.')); 

</script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="../js/html2canvas.min.js"></script>
  <script src="../js/jspdf.debug.js"></script>
  <script src="../js/docx.js"></script>

  <script src="../js/canvas2image.min.js"></script>


<script>
var uploadField = document.getElementById("inputfile");
uploadField.onchange = function() {
    if(this.files[0].size > 2000000 ){
       alert("archivo debe pesar m??ximo 2 mb");
       this.value = "";
    };
};
</script>


<script>
var uploadField = document.getElementById("inputfile2");
uploadField.onchange = function() {
    if(this.files[0].size > 2000000 ){
       alert("archivo debe pesar m??ximo 2 mb");
       this.value = "";
    };
};
</script>


</html>