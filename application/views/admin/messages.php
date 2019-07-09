                        <div class="row">
                            <div class="col-lg-9">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th></th>
                                                <th>Data</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($messages as $messages_item){ ?>
                                            <tr>
                                                <td><a href="message/<?php echo $messages_item['id']; ?>"><?php echo $messages_item["name"]; ?></a></td>
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

                                                    <?php 
                                                    //Formatando a data
                                                    $date = $messages_item["dt_message"];

                                                    $dt = explode(" ", $date);

                                                    $date_non_formated = explode("-", $dt[0]);

                                                    $date_formated = $date_non_formated[2]."/".$date_non_formated[1]."/".$date_non_formated[0];

                                                    $time = $dt[1];

                                                    $date_formated = $date_formated." às ".$time;
                                                    //Fim da formatação

                                                    ?>
                                                        
                                                </td>
                                                <td><?php echo $date_formated; ?></td>
                                                <td><a href="delete/message/<?php echo $messages_item['id']; ?>"><i class="fas fa-minus-circle" onclick="return confirm('Deseja realmente excluir?');"></i></a></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> 