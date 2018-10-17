<div class="sidebar-toggle content" id="sidebar-wrapper">
   <ul class="nav flex-column">
      <li class="nav-item sidebar-nav">
         <a class="nav-link active"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
         <span data-feather="home"></span>
         Gestión <span class="sr-only">(current)</span>
         </a>
         <ul class = "nav-tabs navbar-collapse">
            <li id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
               <a class="nav-link" href="#" data-toggle="collapse"  data-target="#collapseDefiniciones" aria-expanded="false" aria-controls="collapseDefiniciones">
               <span data-feather="folder-plus"></span>
               Definiciones
               </a>
               <div id="collapseDefiniciones" class="collapse" data-parent="#accordion">
                  <ul>
                     <li>
                        <a class="nav-link" href="#" data-toggle="collapse"  data-target="#collapseGeneral" aria-expanded="false" aria-controls="collapseGeneral">
                        <span data-feather="chevron-down"></span>
                        General
                        </a>
                     </li>
                     <div id="collapseGeneral" class="collapse" data-parent="#accordion">
                        <ul>
                           <li>
                              <a class="nav-link" href="">
                                 <span data-feather="users"></span>
                                 usuarios
                              </a>
                           </li>
                        </ul>
                     </div>
                  <!-- Finanzas-->
                     <li>
                        <a class="nav-link" href="#" data-toggle="collapse"  data-target="#collapseFinanzas" aria-expanded="false" aria-controls="collapseFinanzas">
                           <span data-feather="chevron-down"></span>
                           Finanzas
                        </a>
                     </li>
                     <div id="collapseFinanzas" class="collapse" data-parent="#accordion">
                        <ul>
                           <li>
                              <a class="nav-link" href="">
                                 <span data-feather="dollar-sign"></span>
                                 Monedas
                              </a>
                           </li>
                           <li>
                              <a class="nav-link" href="">
                                 <span data-feather="square"></span>
                                 Impuesto
                              </a>
                           </li>
                        </ul>
                     </div>
				 <!-- Habitaciones-->
				 <li>
                     <a class="nav-link" href="#" data-toggle="collapse"  data-target="#collapseHab" aria-expanded="false" aria-controls="collapseHab">
                        <span data-feather="chevron-down"></span>
                        Habitaciones
                     </a>
                  </li>
                     <div id="collapseHab" class="collapse" data-parent="#accordion">
                        <ul>
                           <li>
                              <a class="nav-link" href="">
                              <span data-feather="square"></span>
                              Tipo de habitación
                              </a>
                           </li>
                            <li >
                                <a class="nav-link" href="">
                                    <span data-feather="check-circle"></span>
                                    Estado habitaciones
                                </a>
                            </li>

                        </ul>
                     </div>
				 <!-- Reservas-->
				 <li>
                        <a class="nav-link" href="#" data-toggle="collapse"  data-target="#collapseRes" aria-expanded="false" aria-controls="collapseRes">
                         <span data-feather="chevron-down"></span>
                        Reservas
                        </a>
                     </li>
                     <div id="collapseRes" class="collapse" data-parent="#accordion">
                        <ul>
                           <li>
                              <a class="nav-link" href="">
                              <span data-feather="cloud"></span>
                              Fuentes de reservación
                              </a>
                           </li>
                        </ul>
                     </div>
				 <!--Precios-->
                  </ul>
               </div>
            </li>
         </ul>
    </li>

   <!--
      <li class="nav-item" data-toggle="collapse" data-target="#collapseReportes" aria-expanded="false" aria-controls="collapseReportes">
         <a class="nav-link" href="#">
         <span data-feather="bar-chart-2"></span>
         Reportes
         </a>
         <ul class = "nav-tabs navbar-collapse" >
            <div  id="collapseReportes" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
               <li class="nav-item">

                  <span data-feather="file-text"></span>
                  Corte diario
                  </a>
               </li>
               <li class="nav-item">
                  <span data-feather="file-text"></span>
                  Informe General De ofrendas
                  </a>
               </li>
               <li class="nav-item">
                  <span data-feather="file-text"></span>
                  Ofrendas por Socio
                  </a>
               </li>
                  <span data-feather="file-text"></span>
                  Importes Cargados Por Moneda
                  </a>
               </li>
            </div>
         </ul>
      </li>
       -->
      <!--
         <li class="nav-item">
             <a class="nav-link" href="#">
                 <span data-feather="layers"></span>
                 Integrations
             </a>
         </li>
         -->
   </ul>
</div>
<script type="text/javascript">
$(window).resize(function() {
var path = $(this);
var contW = path.width();
if(contW >= 751){
	document.getElementsByClassName("sidebar-toggle")[0].style.left="200px";
}else{
	document.getElementsByClassName("sidebar-toggle")[0].style.left="-200px";
}
});
$(document).ready(function() {
$('.dropdown').on('show.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
});
$('.dropdown').on('hide.bs.dropdown', function(e){
	$(this).find('.dropdown-menu').first().stop(true, true).slideUp(300);
});
$("#menu-toggle").click(function(e) {
	e.preventDefault();
	var elem = document.getElementById("sidebar-wrapper");
	left = window.getComputedStyle(elem,null).getPropertyValue("left");
	if(left == "200px"){
		document.getElementsByClassName("sidebar-toggle")[0].style.left="-200px";
	}
	else if(left == "-200px"){
		document.getElementsByClassName("sidebar-toggle")[0].style.left="200px";
	}
});
});
</script>
<!--
<script type="text/javascript">
   $('.collapse').collapse();
</script>
-->
