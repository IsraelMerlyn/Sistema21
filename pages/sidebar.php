<?php 
$id=$_SESSION['id'];
?>

<?php

?>
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3><?php echo $empresa;?></h3>
                <ul class="nav side-menu">
                      <li><a href = "inicio.php"><i class="fa fa-dashboard"></i> inicio <span class="fa fa-chevron-right"></span></a></li>

                   
                     

                                  <?php
                      if ($tipo=="administrador" ) {
                    
                      ?>
                 <li><a><i class="fa fa-group"></i> Usuarios(Estudiate/Docente/admin)<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">

                      <li><a href="usuario.php">Usuarios</a></li>

                                  <li><a href="usuario_agregar.php">Agregar</a></li> 

                    </ul>
                  </li>




                  <li><a><i class="fa fa-user-md"></i> Examen<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                             <li><a href="temporada.php">Temporada</a></li>
          <li><a href="puntaje.php">Configurar puntaje</a></li>
           
                

                    </ul>
                  </li>
                          <?php
                      }
                      ?> 
      

                            <li><a><i class="fa fa-user-md"></i> Docente<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                 <?php
                      if ($tipo=="administrador" ) {
                    
                      ?>
                      <li><a href="docente.php">Docente</a></li>
   <li><a href="docente_agregar.php">Agregar</a></li>
   <li><a href="temporada_asignar_curso.php">Matricular alumno</a></li>      
        <li><a href="asignar_curso_docente_agg.php">Asginar curso adocente</a></li>       
         <?php
                      }
                      ?> 
      <?php
                      if ($tipo=="estudiante" ) {
                    
                      ?>

                     <?php
                      }
                      ?>          
                    </ul>
                  </li>
          


                               <li><a><i class="fa fa-user-md"></i> Alumno<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">

                                <?php
                      if ($tipo=="docente" ) {
                    
                      ?>

   <li><a href="temporada_asignar_curso_docente.php">Adminstracion cursos</a></li>      
             
         <?php
                      }
                      ?> 

                 <?php
                      if ($tipo=="administrador" ) {
                    
                      ?>
                      <li><a href="alumno.php">Alumno</a></li>
   <li><a href="alumno_agregar.php">Agregar</a></li>
      
             
         <?php
                      }
                      ?> 
      <?php
                      if ($tipo=="estudiante" ) {
                    
                      ?>
                       <li><a href="temporada_alumno.php">Temporadas</a></li>  

                     <?php
                      }
                      ?>          
                    </ul>
                  </li>


              <?php
                    

                       if ($tipo=="docente") {
                      ?>

                 <li><a><i class="fa fa-bar-chart"></i> Comstancia de notas alumnos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">

                      <li><a href="temporada_constancia_docente.php">Temporada</a></li>
           

                    </ul>
                  </li>

     


             <?php
                      }
                      ?>

                  <?php
                    

                       if ($tipo=="estudiante") {
                      ?>

                 <li><a><i class="fa fa-bar-chart"></i> Comstancia de notas <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">

                      <li><a href="temporada_constancia.php">Temporada</a></li>
           

                    </ul>
                  </li>

     


             <?php
                      }
                      ?>






             <?php
          
                      ?>

        
                      


       

                   

                          
                       







                   

              

                                    <?php
                      
                      ?>

 
     

                  <?php
                    

                       if ($tipo=="administrador") {
                      ?>

                <li><a><i class="fa fa-bar-chart"></i> Comstancia de notas <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">

                      <li><a href="temporada_constancia_admin.php">Temporada</a></li>
           

                    </ul>
                  </li>


     


             <?php
                      }
                      ?>



    

   




         
                 <li><a><i class="fa fa-gear"></i>Configuracion<span class="fa fa-chevron-s"></span></a>
                    <ul class="nav child_menu">


                      <li><a href="editar_usuario_password.php">Cambiar Contraseña</a></li>
                                                                        <?php
                      if ($tipo=="administrador" ) {
                    
                      ?>
                          <li><a href="configuracion.php">Configuracion</a></li>
                                 <?php
                      }
                      ?>

                    </ul>
                  </li>

              </div>
             <!--- <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">E-commerce</a></li>
                      <li><a href="projects.html">Projects</a></li>
                      <li><a href="project_detail.html">Project Detail</a></li>
                      <li><a href="contacts.html">Contacts</a></li>
                      <li><a href="profile.html">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">403 Error</a></li>
                      <li><a href="page_404.html">404 Error</a></li>
                      <li><a href="page_500.html">500 Error</a></li>
                      <li><a href="plain_page.html">Plain Page</a></li>
                      <li><a href="login.html">Login Page</a></li>
                      <li><a href="pricing_tables.html">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div>--->

            </div>
