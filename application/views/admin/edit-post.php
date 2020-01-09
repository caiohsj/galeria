                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Editar post</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="../update/post/<?php echo $post_item['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Título</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="title" placeholder="" class="form-control" value="<?php echo $post_item['title']; ?>">
                                                    <small class="form-text text-muted">Informe o título do projeto</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Descrição</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="description" id="textarea-input" rows="9" placeholder="Descrição deste projeto..." class="form-control"><?php echo $post_item["description"]; ?></textarea>
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