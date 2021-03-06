<?php

try {
    
    //Diretório onde o arquivo será salvo
    $diretorio_destino = "enviados/";

    //Verificando se o diretório não existe
    //Dica is_writable() verifica se o caminho tem permissão de escrita
    if(!is_dir($diretorio_destino))
        throw new Exception("Diretório não localizado");

    //Verificando se o arquivos recebido é um executável
    if(is_executable($_FILES["arquivo_up"]["tmp_name"]))
        throw new Exception("Opa tem arquivo executável aqui!");

    //Verificando a extensão do arquivo
    $ext_arquivo = pathinfo($_FILES["arquivo_up"]["name"], PATHINFO_EXTENSION);

    //Gerando um nome único para o arquivo, o nome terá o prefixo enviado_
    $nome_unico = uniqid("enviado_"). "." . $ext_arquivo;

    //Caminho do novo arquivo no servidor
    $nome_arquivo_servidor = $diretorio_destino . $nome_unico;

    //Move o arquivo da pasta temp para a pasta do servidor
    if(move_uploaded_file($_FILES["arquivo_up"]["tmp_name"], $nome_arquivo_servidor))
    {
        echo "Arquivo enviado com sucesso!";
    }else throw new Exception("Falha ao enviar arquivo. Erro: ". $_FILES["arquivo_up"]["error"]);


} catch(Exception $e) {
    echo $e->getMessage();
}