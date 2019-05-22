                        <div class="row">
                            <div class="col-lg-9">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($messages as $messages_item){ ?>
                                            <tr>
                                                <td><?php echo $messages_item["name"]; ?></td>
                                                <td>
                                                    <?php 
                                                    if($messages_item["status"] == 0)
                                                    {
                                                        echo "Mensagem não lida";
                                                    }
                                                    else
                                                    {
                                                        echo "Mensagem lida";
                                                    }
                                                    ?>
                                                        
                                                </td>
                                                <td><a href="#"><i class="fas fa-minus-circle"></i></a></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> 