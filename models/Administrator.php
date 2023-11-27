<?php
/*
    CRUD creado por Oscar Amado
    Contacto: oscarfamado@gmail.com
*/

class Administrator extends db{
    
    private function view_pedidos(){
        try {
            $SQL = "SELECT * FROM bd_carpinteria1.tbl_pedidos";
            $result = $this->connect()->prepare($SQL);
            $result->execute();
            return $result->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die('Error Administrator(view_pedidos) '.$e->getMessage());
        } finally{
            $result = null;
        }
    }

    function get_view_pedidos(){
        return $this->view_pedidos();
    }

    private function register_pedidos($data){
        try {
            $SQL = 'INSERT INTO bd_carpinteria1.tbl_pedidos (idcliente, idempleado, fechapedido, fechaentrega, estadopedido, totaldelpedido, metododepago, paqueteria) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
            $result = $this->connect()->prepare($SQL);
            $result->execute(array(
                                    $data['idcliente'],
                                    $data['idempleado'],
                                    $data['fechapedido'],
                                    $data['fechaentrega'],
                                    $data['estadopedido'],
                                    $data['totaldelpedido'],
                                    $data['metododepago'],
                                    $data['paqueteria']
                                    )
                            );           
        } catch (Exception $e) {
            die('Error Administrator(register_pedidos) '.$e->getMessage());
        } finally{
            $result = null;
        }
    }

    function set_register_pedido($data){
        $this->register_pedidos($data);
    }

    private function update_pedido($data){
        try {
            $SQL = 'UPDATE bd_carpinteria1.tbl_pedidos SET idcliente = ?, idempleado = ?, fechapedido = ?, fechaentrega = ?, estadopedido = ?, totaldelpedido = ?, metododepago = ?, paqueteria = ? WHERE id = ?';
            $result = $this->connect()->prepare($SQL);
            $result->execute(array(
                                $data['idcliente'],
                                $data['idempleado'],
                                $data['fechapedido'],
                                $data['fechaentrega'],
                                $data['estadopedido'],
                                $data['totaldelpedido'],
                                $data['metododepago'],
                                $data['paqueteria'],
                                $data['id']
                                )
                            );           
        } catch (Exception $e) {
            die('Error Administrator(update_pedido) '.$e->getMessage());
        } finally{
            $result = null;
        }
    }

    function set_update_pedido($data){
        $this->update_pedido($data);
    }

    private function delete_pedido($id){
        try {
            $SQL = 'DELETE FROM bd_carpinteria1.tbl_pedidos WHERE id = ?';
            $result = $this->connect()->prepare($SQL);
            $result->execute(array($id));            
        } catch (Exception $e) {
            die('Error Administrator(delete_pedido) '.$e->getMessage());
        } finally{
            $result = null;
        }
    }

    function set_delete_pedido($id){
        $this->delete_pedido($id);
    }   
}
?>
