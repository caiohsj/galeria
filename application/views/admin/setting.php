                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Configurações do site</strong>
                                        <a href="logo"><button class="au-btn au-btn-icon btn-sm au-btn--blue ml-3">
                                            <i class="zmdi zmdi-plus"></i>alterar logo</button></a>
                                    </div>
                                    <div class="card-body card-block">
                                        
                                        <form action="update/setting/<?php echo $configs['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Telefone </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="phone" class="form-control" value="<?php echo $configs['phone']; ?>">
                                                    <small class="form-text text-muted">Informe um telefone <footer></footer></small>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Email </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="email" class="form-control" value="<?php echo $configs['email']; ?>">
                                                    <small class="form-text text-muted">Informe um email <footer></footer></small>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Rua </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="street" class="form-control" value="<?php echo $configs['street']; ?>">
                                                    <small class="form-text text-muted">Informe a rua <footer></footer></small>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Bairro </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="district" class="form-control" value="<?php echo $configs['district']; ?>">
                                                    <small class="form-text text-muted">Informe um bairro <footer></footer></small>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Número </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="number" class="form-control" value="<?php echo $configs['number']; ?>">
                                                    <small class="form-text text-muted">Informe o número <footer></footer></small>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Cidade </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="city" class="form-control" value="<?php echo $configs['city']; ?>">
                                                    <small class="form-text text-muted">Informe uma cidade <footer></footer></small>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Estado </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="state" class="form-control" value="<?php echo $configs['state']; ?>">
                                                    <small class="form-text text-muted">Informe um estado <footer></footer></small>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">CEP </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="zipcode" class="form-control" value="<?php echo $configs['zipcode']; ?>">
                                                    <small class="form-text text-muted">Informe um CEP <footer></footer></small>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Salvar
                                                </button>
                                            </div>  
                                        </form>
                                    </div>
                                </div>
                            </div>