<?php
/*
    CRUD creado por Oscar Amado
    Contacto: oscarfamado@gmail.com
*/
class administratorController extends Administrator{

    function index(){
        require_once('views/all/header.php');
        require_once('views/all/nav.php');
        require_once('views/index/index.php');
        require_once('views/index/modals.php');
        require_once('views/all/footer.php');
    }

    function tbl_pedidos(){
        ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Pedido</th>
                    <th>ID Cliente</th>
                    <th>ID Empleado</th>
                    <th>Fecha Pedido</th>
                    <th>Fecha Entrega</th>
                    <th>Estado Pedido</th>
                    <th>Total del Pedido</th>
                    <th>Método de Pago</th>
                    <th>Paquetería</th>
                </tr>
            </thead>
            <tbody >        
        <?php
        foreach (parent::get_view_pedidos() as $data) {
        ?>
        <tr>
            <td><?php echo $data->id; ?> </td>
            <td><?php echo $data->idcliente; ?> </td>
            <td><?php echo $data->idempleado; ?> </td>
            <td><?php echo $data->fechapedido; ?> </td>
            <td><?php echo $data->fechaentrega; ?> </td>
            <td><?php echo $data->estadopedido; ?> </td>
            <td><?php echo $data->totaldelpedido; ?> </td>
            <td><?php echo $data->metododepago; ?> </td>
            <td><?php echo $data->paqueteria; ?> </td>

            <td>
              <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                Seleccionar <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#" onclick="ModalUpdate('<?php echo $data->id; ?>','<?php echo $data->idcliente; ?>','<?php echo $data->idempleado; ?>','<?php echo $data->fechapedido; ?>','<?php echo $data->fechaentrega; ?>','<?php echo $data->estadopedido; ?>','<?php echo $data->totaldelpedido; ?>','<?php echo $data->metododepago; ?>','<?php echo $data->paqueteria; ?>');">Actualizar</a></li>
                  <li><a href="#" onclick="deletePedido('<?php echo $data->id; ?>');">Borrar</a></li>
                </ul>
              </div>
            </td>
        </tr>
        <?php
        }
        ?>
            </tbody>
        </table>    
    <?php    
    }

    function deletePedido(){       
        parent::set_delete_pedido($_REQUEST['id']);        
    }

    function registerPedido(){
        $data = array(
                    'id'            => $_REQUEST['id'],
                    'idcliente'     => $_REQUEST['idcliente'],
                    'idempleado'    => $_REQUEST['idempleado'],
                    'fechapedido'   => $_REQUEST['fechapedido'],
                    'fechaentrega'  => $_REQUEST['fechaentrega'],
                    'estadopedido'  => $_REQUEST['estadopedido'],
                    'totaldelpedido'=> $_REQUEST['totaldelpedido'],
                    'metododepago'  => $_REQUEST['metododepago'],
                    'paqueteria'    => $_REQUEST['paqueteria']
                    );       
                    parent::set_register_pedido($data);        
    }    
    
    function updatePedido(){
        $data = array(
                    'id'            => $_REQUEST['id'],
                    'idcliente'     => $_REQUEST['idcliente'],
                    'idempleado'    => $_REQUEST['idempleado'],
                    'fechapedido'   => $_REQUEST['fechapedido'],
                    'fechaentrega'  => $_REQUEST['fechaentrega'],
                    'estadopedido'  => $_REQUEST['estadopedido'],
                    'totaldelpedido'=> $_REQUEST['totaldelpedido'],
                    'metododepago'  => $_REQUEST['metododepago'],
                    'paqueteria'    => $_REQUEST['paqueteria']
                    );       
            parent::set_update_pedido($data);        
    }    
}
?>
