<?php
require_once '../DAO/usuarioDAO.php';

$nome = filter_input(INPUT_POST, 'dado', FILTER_SANITIZE_STRING);

$usuarios = pestUsuar($nome);

if(isset($usuarios) AND (count($usuarios) != 0 )){
    foreach ($usuarios as $usuario){
        echo "<tr>
                                <td>" . $usuario->id . "</td>
                                <td>". $usuario->ncomp ."</td>
                                <td>". $usuario->nusuar ."</td>
                                <td>". $usuario->email ."</td>
                                <td>". $usuario->senha ."</td>
                            </tr>";
    }
}else{
    echo "<tr><td class='text-center' colspan='5'>Nenhum registro encontrado</td></tr>";
}