<?php 
    $data= file_get_contents("http://datos.minsa.gob.pe/api/action/datastore/search.json?resource_id=b98cf73c-ddbc-4910-802b-883fdda7da1d&limit=5");
    $data_parse = json_decode($data);
    //var_dump($data_parse->result->records[0]->DEPARTAMENTO);
    for ($i=0; $i <count($data_parse->result->records) ; $i++) { 
        echo $data_parse->result->records[$i]->DEPARTAMENTO."<br>";
    }        
?>