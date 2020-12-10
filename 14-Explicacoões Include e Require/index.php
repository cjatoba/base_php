<?php

/**
 * Funções para importação de arquivos
 * include, include_once (inclui o arquivo e caso não exista gera um warning mas continua o código)
 * require, require_once (inclui o arquivo e caso não existe fera um fatal error e para o código)
 */

require 'arquivos/cabecalho.php';

require_once 'arquivos/cabecalho.php';

echo "Seu nome é, " . $nome;

// var_dump($nome);