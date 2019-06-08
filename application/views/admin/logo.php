                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Alterar logo principal do site</strong>
                                    </div>
                                    <div class="card-body card-block">

                                        <div class="col-md-4">
                                            <div class="card">
                                                <img class="card-img-top" src="../<?php echo $configs['logo']; ?>">
                                                
                                            </div>
                                        </div>
                                        
                                        <form action="update/logo/<?php echo $configs['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Nova logo do site</label>
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