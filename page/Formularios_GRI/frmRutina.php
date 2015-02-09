<div class="overlay-container">
			<div class="window-container zoomin">
		<form class="reg-page" align="center" action="../Rutina/CRUD.php" method='post'>
				
				
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="reg-header">            
                        <center><h2>Registro de Rutina</h2></center>
                    </div>
					

                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" placeholder="IDRutina" class="form-control" name="Codigo" autofocus requireg>
                    </div>                    
                    
					<div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="text" placeholder="Descripción" class="form-control" name="Descripción" autofocus required />
                    </div>
					<div class="input-group margin-bottom-20">
                        <span class="input-group-addon">Dia<i class="fa fa-lock"></i></span>
								<select name="periodo" placeholder="Dia">
									<option value="Lunes">Lunes</option>
									<option value="Martes">Martes</option>
									<option value="Miércoles">Miércoles</option>
									<option value="Jueves">Jueves</option>
									<option value="Viernes">Viernes</option>
									<option value="Sábado">Sábado</option>
									<option value="Domingo">Domingo</option>									
									<option value="Todos">Todos</option>
								</select>
					<!--	<input type="date" placeholder="fecha" class="form-control" name="Fecha" autofocus required/>-->
                    </div>
					<div class="input-group margin-bottom-20">
                        <span class="input-group-addon">Activo<i class="fa fa-lock"></i></span>
						<input type="radio" class="form-control" name="Estado" value="1" autofocus required/>
						<span class="input-group-addon">Inactivo<i class="fa fa-lock"></i></span>
                        <input type="radio" class="form-control" name="Estado" value="0" autofocus required/>
                    </div>
</br></br>
                    <div class="row" align="center">
                        <div class="col-md-6">
                            <input class="btn-u pull-right" type="submit" name="Accion" id="Accion" value="Grabar"/>
							<input class="btn-u pull-right" type="submit" name="Accion" id="Accion" value="Eliminar"/>
							<input class="btn-u pull-right" type="submit" name="Accion" id="Accion" value="Modificar"/>
							<input class="btn-u pull-right" type="reset" id="reset" value="Nuevo"/>
                        </div>
                    </div>
                </form> 
								<br/>
							<span class="close">Cerrar</span>
						</div>
					</div>