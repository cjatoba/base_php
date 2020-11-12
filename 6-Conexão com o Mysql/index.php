<?php 

try{
    //Declarar o dsn (Data Source Name)
    $dsn = "mysql:host=localhost;dbname=";
    
    $username = "";
    $passwd = "";
    
    //PDO (PHP Data Object)
    $conexão = new PDO($dsn, $username, $passwd);

    $stmt = $conexão->prepare(
        "SELECT * FROM film"
    );

    $stmt->execute();

} catch(Exception $e){
    echo $e->getMessage();
}

?>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Título:</th>
            <th>Ano:</th>
        </tr>
    </thead>
    <tbody>
        <?php while($filme = $stmt->fetchObject()): ?>
        <tr>
            <td><?= $filme->film_id ?></td>
            <td><?= $filme->title ?></td>
            <td><?= $filme->release_year ?></td>
        </tr>
        <?php endwhile ?>
    </tbody>
</table>