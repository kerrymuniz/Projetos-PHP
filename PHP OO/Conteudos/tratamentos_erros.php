<?php

    try
    {
        echo '<h3>*** Try ***<h3>';

        // $sql = 'Select * from clientes';
        // mysqli_query($sql);

        if(!file_exists('require_arquivo_a.php')) {
            throw new Exception('O arquivo em questão deveria estar disponível, mas não estava. Seguiremos mesmo assim.');
        }
        

    } /*catch (Error $e) {

        echo '<h3>*** Catch Error ***<h3>';
        echo $e;

    }*/ 
    
    catch (Exception $e) {

        echo '<h3>*** Catch Exception ***<h3>';
        echo $e;

    } finally {
        echo '<h3>*** Finally ***<h3>';
    }

?>