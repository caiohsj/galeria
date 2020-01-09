                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Configurações da conta</strong>
                                        <a href="profile"><button class="au-btn au-btn-icon btn-sm au-btn--blue ml-3">
                                            <i class="zmdi zmdi-plus"></i>alterar perfil</button></a>
                                    </div>
                                    <div class="card-body card-block">
                                        
                                        <form action="update/account/<?php echo $photographer['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nome </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="name" class="form-control" value="<?php echo $photographer['name']; ?>">
                                                    <small class="form-text text-muted">Informe um nome <footer></footer></small>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Telefone </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="phone" class="form-control" value="<?php echo $photographer['phone']; ?>">
                                                    <small class="form-text text-muted">Informe um telefone <footer></footer></small>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Email </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="email" class="form-control" value="<?php echo $photographer['email']; ?>">
                                                    <small class="form-text text-muted">Informe um email <footer></footer></small>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Data de nascimento </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="text-input" name="dt_birthday" class="form-control" value="<?php echo $photographer['dt_birthday']; ?>">
                                                    <small class="form-text text-muted">Informe uma data de nascimento <footer></footer></small>
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