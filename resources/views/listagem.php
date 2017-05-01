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
    <h1 class='h1' style='text-align:center'>Lista de produtos</h1>
    <table class='table table-inverse' border='1' style='margin-left:25%;margin-top:10%;width:50%'>
    <tr>
    <th>Código</th>
    <th>Nome</th>    
    <th>Descrição</th>    
    <th>Preço</th>    
    <th>Quantidade</th> 
    <th style='text-align:center;'>Opções</th>   
    </tr>
    
    
    <?php foreach($produtos as $p):?>
    
      <tr>
	       <td><?= $p->id ?> </td>
	       <td><?= $p->nome ?> </td>
	       <td><?= $p->descricao ?> </td>
	       <td><?= $p->valor ?> </td>
	       <td align=center><?= $p->quantidade ?> </td>	       
	       <td><a href="/produtos/detalhe?id=<?= $p->id ?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>

       </tr>
    	
    <?php endforeach?>
    
    </table>
    </body>
    </html>