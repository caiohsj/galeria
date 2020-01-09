                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Alterar foto do perfil</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        
                                        <form action="update/profile/<?php echo $user['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Nova foto</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="photo" class="form-control-file" accept="image/jpeg">
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> OK
                                                </button>
                                            </div>  
                                        </form>
                                    </div>
                                </div>
                            </div>