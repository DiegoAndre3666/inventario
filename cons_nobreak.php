<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <?php
    include_once '_head.php';
    ?>
    <body>
        <?php
        include_once '_topo.php';
        include_once '_menu.php';
        ?>


        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Consultar Inventário</h2>   


                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                
                <div class="col-md-6">
                    
                        <div class="form-group">
                            <label>Marca</label>
                            <select class="form-control">
                                <option value="0" selected></option>
                               
                            </select>
                        </div>
                    </div>
                
                <div class="col-md-6">
                    
                        <div class="form-group">
                            <label>KVA</label>
                            <select class="form-control">
                                <option value="0" selected></option>
                                
                            </select>
                        </div>
                    </div>
                
              
                
                  <div class="form-group">
                        <center>
                            <button class="btn btn-info">Pesquisar</button>
                        </center>
                    </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Nobreak
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Marca</th>
                                        <th>Modelo</th>
                                        <th>Número de Série</th>
                                        <th>KVA</th>
                                        <th>Local</th>
                                        <th>IP</th>
                                        <th>Data Compra</th>
                                        <th>Data Instalação</th>
                                        <th>Data Última Manutenção</th>
                                        <th>Nota Fiscal</th>
                                        <th>Ação</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><a href="#" class="btn btn-warning btn-xs">Alterar</a></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>



                </body>
                </html>


