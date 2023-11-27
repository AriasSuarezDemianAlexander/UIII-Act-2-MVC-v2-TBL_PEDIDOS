<div id="addPedido" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Agregar nuevo pedido</h4>
            </div>
            <div class="modal-body">
                <form name="formPedido" onsubmit="register(); return false">

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="idcliente" type="text" class="form-control" name="idcliente" placeholder="ID Cliente" required autocomplete="off">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="idempleado" type="text" class="form-control" name="idempleado" placeholder="ID Empleado" required autocomplete="off">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="fechapedido" type="text" class="form-control" name="fechapedido" placeholder="Fecha de Pedido" required autocomplete="off">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="fechaentrega" type="text" class="form-control" name="fechaentrega" placeholder="Fecha de Entrega" required autocomplete="off">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="estadopedido" type="text" class="form-control" name="estadopedido" placeholder="Estado del Pedido" required autocomplete="off">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="totaldelpedido" type="text" class="form-control" name="totaldelpedido" placeholder="Total del Pedido" required autocomplete="off">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="metododepago" type="text" class="form-control" name="metododepago" placeholder="Método de Pago" required autocomplete="off">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="paqueteria" type="text" class="form-control" name="paqueteria" placeholder="Paquetería" required autocomplete="off">
                    </div>
                    <br>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Registrar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
                </form>
            </div>
        </div>
    </div>
</div>


<div id="updatePedido" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Actualizar información del pedido </h4>
            </div>
            <div class="modal-body">
                <form name="formPedidoUpdate" onsubmit="update(); return false">
                    <input type="text" name="id" id="id" style="display: none;">

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="idcliente" type="text" class="form-control" name="idcliente" placeholder="ID Cliente" required autocomplete="off">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="idempleado" type="text" class="form-control" name="idempleado" placeholder="ID Empleado" required autocomplete="off">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="fechapedido" type="text" class="form-control" name="fechapedido" placeholder="Fecha de Pedido" required autocomplete="off">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="fechaentrega" type="text" class="form-control" name="fechaentrega" placeholder="Fecha de Entrega" required autocomplete="off">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="estadopedido" type="text" class="form-control" name="estadopedido" placeholder="Estado del Pedido" required autocomplete="off">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="totaldelpedido" type="text" class="form-control" name="totaldelpedido" placeholder="Total del Pedido" required autocomplete="off">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="metododepago" type="text" class="form-control" name="metododepago" placeholder="Método de Pago" required autocomplete="off">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="paqueteria" type="text" class="form-control" name="paqueteria" placeholder="Paquetería" required autocomplete="off">
                    </div>
                    <br>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Actualizar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
                </form>
            </div>
        </div>
    </div>
</div>
