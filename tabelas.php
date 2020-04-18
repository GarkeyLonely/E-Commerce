

<?php
$db = new SQLite3('storage.db');
$db->exec("CREATE TABLE produtos(id INTEGER PRIMARY KEY, produts TEXT, preco INT, link TEXT, botao TEXT)");
$db->exec("CREATE TABLE aprovados(id INTEGER PRIMARY KEY, produto TEXT, cep INT, email TEXT, nome TEXT, cidade TEXT, rua TEXT, referencia TEXT)");
?>
