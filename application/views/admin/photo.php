                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Photo Form</strong> Elements
                                        <?php 
                                            if(isset($alertSuccess))
                                            {
                                        ?>
                                        <div class="alert alert-success" role="alert">
                                            
                                            <?php echo $alertSuccess; ?>
                                                
                                        </div>
                                        <?php
                                            } 
                                        ?>
                                    </div>
                                    <div class="card-body card-block">
                                        
                                        <form action="create/photo" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nome </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="name" placeholder="Ex: Nature" class="form-control">
                                                    <small class="form-text text-muted">Informe um nome para a <footer></footer></small>
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Arquivo da foto</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="photo" class="form-control-file">
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Submit
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Reset
                                                </button>
                                            </div>  
                                        </form>
                                    </div>
                                </div>
                            </div>