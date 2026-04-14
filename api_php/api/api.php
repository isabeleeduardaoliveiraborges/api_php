<?php
    //Cabeçalho
    header("Content-Type: application/json"); //define o tipo de resposta

    $metodo = $_SERVER['REQUEST_METHOD'];
    //echo "metodo da requisição:" .$metodo;

    //rucupera arquivo json na mesma pasta do projeto 
    $arquivo = 'usuarios.json';

    //verica se o arquivo existe , se não existir cria um com array vazio
    if (!file_exists($arquivo)){
        file_put_contents($arquivo, json_encode([], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNCODE));
    }

    //le o conteudo do arquivo json
    $usuarios = json_decode(file_get_contents($arquivo), true);
    //Conteudo
    //$usuarios = [
       //["id" => 1, "nome" => "Maria Souza", "email" => "maria@gmail.com"],
      // ["id" => 2, "nome" => "Jose Silva", "email" => "jose@gmail.com"]
    //];

   // switch ($metodo){
         //case 'GET':
            //echo"aqui açoes do metodo get";
            //Converte para JSON e retorna
           // echo json_encode($usuarios);
           // break;
        // case 'POST':
            //echo"aqui açoes do metodo POST";
           // $dados = json_decode(file_get_contents('php://input'), true);
            //print_r($dados);
            //$novoUsuario = [
             //   "id" => $dados["id"],
            //    "nome" => $dados["nome"],
             //   "email" => $dados["email"]
           // ];

            //adicione o novo usuario ao array existente
            //array_push($usuarios, $novoUsuario);
            //echo json_encode('Usuário inserido com sucesso!');
           // print_r($usuarios);

           // break;
        //default:
          // echo"aqui açoes do metodo POST";
          // break;
    //}

?>