    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Cabeçalho da página -->
            <div class="row">
                <div class="col-lg-12">
                <h1 class="page-header">
                    Consultar Limites <!--<small>Comentário adicional</small> -->
		</h1>
                </div>
            </div>
			
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            <div class="configdiv" style="text-align:left">
                                <form name="frmConsulta" id="frmConsulta">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">CEP: </label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="txtConsCEP" placeholder="Insira o CEP...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Logradouro: </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="txtConsLog" placeholder="Insira o logradouro...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-2">
                                        <button type="button" id="btnConsulta" name="btnConsulta" class="btn btn-default" >Consultar</button>	
                                    </div>
                                </div>
                                <table class="table table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Primeiro</th>
                                            <th scope="col">Último</th>
                                            <th scope="col">Nickname</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                          </tbody>
                                        </table>					
					</form>
                                    </div>
				</div>
                            <div class="col-sm-4"> </div>
                        </div>
                    </div>
                </div>
            </div>