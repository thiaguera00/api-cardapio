<?php 

     if($acao === '' && $param === ''){
            echo json_encode(['ERRO' => 'Caminho não encontrado']);
        }
            if($acao === 'list'&& $param == ''){

            $db = DB::connect();
            $rs = $db->prepare("SELECT * FROM users ORDER BY username");
            $rs->execute();
            $obj = $rs->fetchAll(PDO::FETCH_ASSOC);

            if($obj){
                echo json_encode(["dados" => $obj]);
            }else{
                echo json_encode(["dados" => 'Não existem dados para retornar']);
            }
        }

         if($acao === 'list'&& $param != ''){

            $db = DB::connect();
            $rs = $db->prepare("SELECT * FROM users WHERE id={$param}");
            $rs->execute();
            $obj = $rs->fetchObject();

            if($obj){
                echo json_encode(["dados" => $obj]);
            }else{
                echo json_encode(["dados" => 'Não existem dados para retornar']);
            }
        }