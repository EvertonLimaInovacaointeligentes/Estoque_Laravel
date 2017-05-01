@extends('principal')
@section('conteudo')
  <div class="container">
    <h1 class='h1' style='text-align:center'>Detalhes do produto <?=$produto->nome?></h1>
    
    
    <ol class="list-group" style='margin-left:30%;margin-top: 10%;'>
        <li>Código: {{ $produto->id }} </li>        
        <li>Descrição: {{ $produto->descricao }}</li>
        <li>Preço: {{ $produto->valor }}</li>
        <li>quantidade: {{ $produto->quantidade }}</li>
    </ol>
    <a href="/produtos" style="margin-left: 30%;">voltar aos produtos</a>
   </div> 
@stop    