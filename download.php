<?php
$arquivo = 'midia/arquivo.pdf'; // Caminho do seu arquivo

if (file_exists($arquivo)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($arquivo).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($arquivo));
    readfile($arquivo);
    exit;
} else {
    echo "Arquivo não encontrado.";
}
?>
