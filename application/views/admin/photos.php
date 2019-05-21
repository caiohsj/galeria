                        <div class="row">
                            <div class="col-lg-9">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Nome da imagem</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($photos as $photos_item){ ?>
                                            <tr>
                                                <td><?php echo $photos_item["name"]; ?></td>
                                                <td><img style="height: 40px;" src="<?php echo '../'.$photos_item['url']; ?>"></td>
                                                <td><a href="delete/photo/<?php echo $photos_item['id']; ?>"><i class="fas fa-minus-circle"></i></a></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> 