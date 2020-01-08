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
                
                <h3>Filtros</h3><br>
                 <div class="col-md-4">
                    
                        <div class="form-group">
                            <label>Modelo</label>
                            <select class="form-control">
                                <option value="0" selected></option>
                                
                            </select>
                        </div>
                    </div>
                
                <div class="col-md-4">
                    
                        <div class="form-group">
                            <label>Departamento</label>
                            <select class="form-control">
                                <option value="0" selected></option>
                                <option value="1"></option>
                                <option value="2"></option>
                            </select>
                        </div>
                    </div>
                
                <div class="col-md-4">
                    
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control">
                                <option value="0" selected></option>
                                <option value="1">Ativos</option>
                                <option value="2">Inativos</option>
                            </select>
                        </div>
                    </div>
                
                  <div class="form-group">
                        <center>
                            <button class="btn btn-info">Pesquisar</button>
                        </center>
                    </div>
                <hr/>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Switch
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Marca</th>
                                        <th>Modelo</th>
                                        <th>IP</th>
                                        <th>Departamento</th>
                                        <th>Mac</th>
                                        <th>Service Tag</th>
                                        <th>Nota Fiscal</th>
                                        <th>Status</th>
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
                                        <td><a href="#" class="btn btn-warning btn-xs">Alterar</a></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>



                </body>
                </html>

