<?php 

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);

*/

//carrega um usuário
//$root = new Usuario();
//$root->loadbyId(3);

//echo $root;

//carrega lista de usuaários
/*$lista = Usuario::getList();

echo json_encode($lista);
*/

//carrega uma lista de usuarios buscando pelo login
/*$search = Usuario::search("jo");

echo json_encode($search);

*/
//carregar um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("wanderson","1234567890");

echo $usuario;
 ?>