<?php 

if ($acao == '' && $param == '') { echo json_encode(['ERRO' => 'Caminho não encontrado!']); exit; }

if ($acao == 'delete' && $param == '') { echo json_encode(['ERRO' => "É necessário informar um cliente."]); exit; }

if ($acao == 'delete' && $param != ''){
    

    $db = DB::connect();
    $rs = $db->prepare("DELETE FROM items WHERE id={$param}");
    $exec = $rs->execute();

    if ($exec) {
        echo json_encode(["dados" => 'Dados excluidos com sucesso.']);
    } else {
        echo json_encode(["dados" => 'Houve erro ao excluir dados.']);
    }

}
