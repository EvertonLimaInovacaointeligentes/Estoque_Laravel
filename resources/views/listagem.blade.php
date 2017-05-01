@extends('principal')
@section('conteudo')
    <h1 class='h1' style='text-align:center'>Lista de produtos</h1>
    <!--<table class='table table-inverse' border='1' style='margin-left:25%;margin-top:10%;width:50%'>-->
    <table class='table table-inverse' border='1'>
    <tr>
    <th>Código</th>
    <th>Nome</th>    
    <th>Descrição</th>    
    <th>Preço</th>    
    <th>Quantidade</th> 
    <th style='text-align:center;'>Opções</th>   
    </tr>   
    @if(empty($produtos))
  <div class="alert alert-danger">
    <p>Você não tem nenhum produto cadastrado.</p>
  </div>    
    @else
        @foreach($produtos as $p)    
          <tr class="{{$p->quantidade<=1 ? 'danger':''}}">
    	       <td>{{$p->id}} </td>
    	       <td>{{ $p->nome }} </td>
    	       <td>{{ $p->descricao or 'Não tem Descrição'}} </td>
    	       <td>{{ $p->valor }} </td>
    	       <td align=center>{{ $p->quantidade }} </td>	       
    	       <td><a href="/detalhe/{{ $p->id }}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>
           </tr>    	
        @endforeach 
    @endif
    </table>
    <h4>
      <!--<span class="label label-danger pull-right" style="margin-right: 54%;margin-top: 5%;">-->
      <span class="label label-danger pull-right">
        Um ou menos itens no estoque
      </span>
    </h4>
@stop
    