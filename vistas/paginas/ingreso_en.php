<div class="ladoUsuarios">

	<div class="container-fluid">
		
		<div class="row">
			
			<div class="col-12 col-lg-4">

				<figure class="p-2 p-sm-5 p-lg-4 p-xl-5 text-center">
				
					<a href="<?php echo $ruta; ?>inicio"><img src="img/logo-positivo.png" class="img-fluid"></a>				

					<div class="d-flex justify-content-between">
					
						<h4>Login to the system</h4>

						<div class="dropdown text-right">

							<button type="button" class="btn btn-light btn-sm dropdown-toggle pr-3" data-toggle="dropdown">
								<form method="post" action="<?php echo "http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]; ?>">
										
										<input type="hidden" name="idioma" value="en">
										<input type="submit" value="EN" style="border: 0;
																			    background: transparent;
																			    padding: 0;
																			    margin: 0;
																			    float: left;
																			    cursor: pointer;">



								</form>
							</button>

							<div class="dropdown-menu">

								<a class="dropdown-item">
									
									<form method="post" action="<?php echo "http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]; ?>">
									
										<input type="hidden" name="idioma" value="es">
										<input type="submit" value="ES" style="border: 0;
																			    background: transparent;
																			    padding: 0;
																			    margin: 0;
																			    cursor: pointer;">



									</form>

								</a>

							</div>

						</div>

					</div>

					<form method="post" class="mt-5">

						<p class="text-center py-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi sunt officia unde officiis</p>

						<input type="email" class="form-control my-3 py-3" placeholder="Email" name="ingresoEmail" required>
						<div class="input-group">
						<input type="password" class="form-control my-3 py-3" placeholder="Password" name="ingresoPassword" required>
						<div class="input-group-append">
									<button id="show_password" class="btn btn-primary my-3 py-3" type="button" onclick="mostrarPassword()"> 
									<span class="fa fa-eye-slash icon"></span> </button>
								</div>
						</div>

						<?php 

							$ingreso = new ControladorUsuarios();
							$ingreso -> ctrIngresoUsuario();

						?>


						<input type="submit" class="form-control my-3 py-3 btn btn-info" value="Login">

						<p class="text-center py-3">Do not you have an account yet? | <a href="<?php echo $ruta; ?>registro">Sign up</a></p>
						
						<hr>

						<p class="text-center py-3">Forgot your password?</p>


					</form>

				</figure>

			</div>

			<div class="col-12 col-lg-8 fotoIngreso text-center">		

				<a href="<?php echo $ruta; ?>inicio"><button class="d-none d-lg-block text-center btn btn-default btn-lg my-3 text-white btnRegresar">Back</button></a>

				<a href="<?php echo $ruta; ?>inicio"><button class="d-block d-lg-none text-center btn btn-default btn-lg btn-block my-3 text-white btnRegresarMovil">Back</button></a>

				<ul class="p-0 m-0 py-4 d-flex justify-content-center redesSociales">

					<li>
						<a href="#" target="_blank"><i class="fab fa-facebook-f lead text-white mx-4"></i></a>
					</li>

					<li>
						<a href="#" target="_blank"><i class="fab fa-instagram lead text-white mx-4"></i></a>
					</li>	

					
					<li>
						<a href="#" target="_blank"><i class="fab fa-linkedin lead text-white mx-4"></i></a>
					</li>

					<li>
						<a href="#" target="_blank"><i class="fab fa-twitter lead text-white mx-4"></i></a>
					</li>

					<li>
						<a href="#" target="_blank"><i class="fab fa-youtube lead text-white mx-4"></i></a>
					</li>

				</ul>

			</div>

		</div>

	</div>

</div>


<script type="text/javascript">
function mostrarPassword(){
		var cambio = document.getElementById("txtPassword");
		if(cambio.type == "password"){
			cambio.type = "text";
			$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		}else{
			cambio.type = "password";
			$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		}
	} 
	
	$(document).ready(function () {
	//CheckBox mostrar contraseña
	$('#ShowPassword').click(function () {
		$('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
	});
});
</script>