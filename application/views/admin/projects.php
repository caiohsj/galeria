                        <div class="row">
                            <div class="col-lg-9">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>título</th>
                                                <th>Descrição</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($projects as $project_item){ ?>
                                            <tr>
                                                <td><?php echo $project_item["title"]; ?></td>
                                                <td><?php echo $project_item["description"]; ?></td>
                                                <td><a href="delete/project/<?php echo $project_item['id']; ?>"><i class="fas fa-minus-circle"></i></a></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>