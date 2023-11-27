function objectAjax() {
    var xmlhttp = false;
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
            xmlhttp = false;
        }
    }
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}

// Inicializo automáticamente la función read al entrar a la página o recargar la página;
addEventListener('load', read, false);

function read() {
    $.ajax({
        type: 'POST',
        url: '?c=administrator&m=tbl_pedidos',
        beforeSend: function () {
            $("#information").html("Procesando, espere por favor...");
        },
        success: function (response) {
            $("#information").html(response);
        }
    });
}

function register() {
    id = document.formPedido.id.value;
    idcliente = document.formPedido.idcliente.value;
    idempleado = document.formPedido.idempleado.value;
    fechapedido = document.formPedido.fechapedido.value;
    fechaentrega = document.formPedido.fechaentrega.value;
    estadopedido = document.formPedido.estadopedido.value;
    totaldelpedido = document.formPedido.totaldelpedido.value;
    metododepago = document.formPedido.metododepago.value;
    paqueteria = document.formPedido.paqueteria.value;

    ajax = objectAjax();
    ajax.open("POST", "?c=administrator&m=registerPedido", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            read();
            alert('Los datos guardaron correctamente.');
            $('#addPedido').modal('hide');
            document.formPedido.reset();
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("id=" + id + "&idcliente=" + idcliente + "&idempleado=" + idempleado + "&fechapedido=" + fechapedido + "&fechaentrega=" + fechaentrega + "&estadopedido=" + estadopedido + "&totaldelpedido=" + totaldelpedido + "&metododepago=" + metododepago + "&paqueteria=" + paqueteria);
}

function update() {
    id = document.formPedidoUpdate.id.value;
    idcliente = document.formPedidoUpdate.idcliente.value;
    idempleado = document.formPedidoUpdate.idempleado.value;
    fechapedido = document.formPedidoUpdate.fechapedido.value;
    fechaentrega = document.formPedidoUpdate.fechaentrega.value;
    estadopedido = document.formPedidoUpdate.estadopedido.value;
    totaldelpedido = document.formPedidoUpdate.totaldelpedido.value;
    metododepago = document.formPedidoUpdate.metododepago.value;
    paqueteria = document.formPedidoUpdate.paqueteria.value;

    ajax = objectAjax();
    ajax.open("POST", "?c=administrator&m=updatePedido", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            if (ajax.status == 200) {
                read();
                alert("Los datos se han actualizado");
                $('#updatePedido').modal('hide');
            }
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("id=" + id + "&idcliente=" + idcliente + "&idempleado=" + idempleado + "&fechapedido=" + fechapedido + "&fechaentrega=" + fechaentrega + "&estadopedido=" + estadopedido + "&totaldelpedido=" + totaldelpedido + "&metododepago=" + metododepago + "&paqueteria=" + paqueteria);
}

function deletePedido(id) {
    if (confirm('¿Está seguro de eliminar este registro?')) {
        ajax = objectAjax();
        ajax.open("POST", "?c=administrator&m=deletePedido", true);
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4) {
                read();
            }
        }
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        ajax.send("id=" + id);
    }
}

function ModalRegister() {
    $('#addPedido').modal('show');
}

function ModalUpdate(id, idcliente, idempleado, fechapedido, fechaentrega, estadopedido, totaldelpedido, metododepago, paqueteria) {
    document.formPedidoUpdate.id.value = id;
    document.formPedidoUpdate.idcliente.value = idcliente;
    document.formPedidoUpdate.idempleado.value = idempleado;
    document.formPedidoUpdate.fechapedido.value = fechapedido;
    document.formPedidoUpdate.fechaentrega.value = fechaentrega;
    document.formPedidoUpdate.estadopedido.value = estadopedido;
    document.formPedidoUpdate.totaldelpedido.value = totaldelpedido;
    document.formPedidoUpdate.metododepago.value = metododepago;
    document.formPedidoUpdate.paqueteria.value = paqueteria;

    $('#updatePedido').modal('show');
}
