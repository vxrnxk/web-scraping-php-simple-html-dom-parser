<?php

require_once './inc/simple_html_dom.php';

$html = file_get_html("https://olhardigital.com.br/noticias/");
$noticias = $html->find("h3");

$arquivo = fopen("resultado.txt", "a");

for($i = 0; $i < sizeof($noticias); $i++) {    
    fwrite($arquivo, $noticias[$i]->plaintext . "\n");
}

fclose($arquivo);

echo "Arquivo gerado!";
