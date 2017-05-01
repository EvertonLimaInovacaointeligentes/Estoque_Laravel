<!DOCTYPE html>
    <html>
    <head> 
    <meta charset='utf-8'>
    <link rel='stylesheet' href='/css/app.css'>
    <title>
    Listagem de produtos
    </title>
    </head>
    <body>
    <h1 class='h1' style='text-align:center'>Detalhes do produto <?=$produto->nome?></h1>
    
    
    <ol class="list-group" style='margin-left:30%;margin-top: 10%;'>
        <li>Código: <?= $produto->id ?> </li>        
        <li>Descrição: <?= $produto->descricao ?></li>
        <li>Preço: <?= $produto->valor ?></li>
        <li>quantidade: <?= $produto->quantidade ?></li>
    </ol>
    	
    
    
    </table>
    </body>
    </html>