<?php
$cod = $_GET['cod'];
include("../modelo/clienteClase.php");
$cli = new Cliente($cod, "", "", "");

$res = $cli->listarClienteId();


include("../vista/clienteModifica.php");
if (isset($_GET['modificar'])) {
    $rs = $_GET['razon'];
    $ni = $_GET['nit'];
    $r = $cli -> editarCliente($cod,$rs,$ni);
    
    if ($r) {
        ?>
            <script type="text/javascript">
                alert("Se modifico correctamente");
                window.location.href="clienteLista.php"
            </script>
        <?php
        
        } else {
        ?>
            <script type="text/javascript">
                alert("no se modifico");
            </script>
        <?php
        }

}


?>