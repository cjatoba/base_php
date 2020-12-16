<?php

namespace App\Controller;

use App\DAO\LoginDAO;
use \Exception;

class LoginController extends Controller
{
    public static function login()
    {
        $usuario = (isset($_COOKIE['sdc_user'])) ? $_COOKIE['sdc_user'] : '';
        include PATH_VIEW . '/login.php';
    }

    public static function autenticar()
    {
        $usuario = $_POST['user'];
        $senha = $_POST['pass'];

        $login_dao = new LoginDAO();

        $resultado = $login_dao->getUserByUserAndPass($usuario, $senha);

        if($resultado !== false){
            $_SESSION["usuario_logado"] = array(
                'id' => $resultado->id,
                'nome' => $resultado->nome
            );

            if(isset($_POST['remember']))
                self::remember($usuario);

            header("Location: /");
        }else{
            header("Location: /login?fail=true");
        }

    }    

    private static function remember($user)
    {
        $validade = strtotime('+1 month');

        setcookie('sdc_user', $user, $validade, '/', '', false, true);
    }

    private static function forget()
    {
        $validade = time() - 3600;

        setcookie('sdc_user', '', $validade, '/', '', false, true);
    }

    public static function esqueciSenha(){
        include PATH_VIEW . 'esqueci_senha.php';
    }

    public static function enviarNovaSenha()
    {

        try{
            $nova_senha = uniqid();
            $email = $_POST['email'];

            $login_dao = new LoginDAO();
            $login_dao->setNewPasswordForUserByEmail($email, $nova_senha);

            $assunto = "Nova senha do sistema";
            $mensagem = "Sua nova senha é: " . $nova_senha;

            $retorno = "Você receberá uma nova senha em seu e-mail cadastrado";

            if(!mail($email, $assunto, $mensagem))
            {
                $teste = "mensagem teste" . $nova_senha;
                throw new Exception("Ops, falha ao enviar o e-mail. " . $teste);
            }
        }catch(Exception $e){
            $retorno = $e->getMessage();
        }

        include PATH_VIEW . 'esqueci_senha.php';

    }

    public static function sair()
    {
        self::forget();

        unset($_SESSION["usuario_logado"]);

        parent::isProtected();
    }

    public static function getNameOfUser()
    {
        return $_SESSION['usuario_logado']['nome'];
    }
}