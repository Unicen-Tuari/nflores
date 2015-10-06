<table class="table table-hover tablaheroe">
    {if $datos}
        {foreach $datos as $user}
            <tr class="success">
                <td>Nombre Usuario: </td>			
                <td>Id usuario: </td>
                <td>Avatar name: </td>
                <td>Edad: </td>
                <td>Nacion: </td>
            </tr>
            <tr>
                <td>{$user['username']}</td>
                <td>{$user['idusuario']}</td>
                <td>{$user['useravatar']}</td>
                <td>{$user['edad']}</td>
                <td>{$user['nacion']}</td>
            </tr>
        {/foreach}
    {else}
    <p>TABLA VACIA</p>
    {/if}
</table>