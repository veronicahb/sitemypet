@extends('adm.layout')

@section('content')
<a href="{{url('contribuinte/create')}}" class="button">Adicionar</a>
<table>
  <thead>
    <tr>
      <th>Nome</th>
      <th>Telefone</th>
      <th>Valor</th>
      <th>Editar</th>
      <th>Remover</th>
    </tr>
  </thead>
  <tbody>
    @foreach($contribuintes as $contribuinte)
    <tr>
      <td>{{$contribuinte->user->name}}</td>
      <td>{{$contribuinte->telefone}}</td>
      <td>{{$contribuinte->valor}}</td>
      <td>
        <a href="{{route('contribuinte.edit',$contribuinte->id)}}" class="button">Editar</a>
      </td>
      <td>
        <form method="POST" action="{{route('contribuinte.destroy',$contribuinte->id)}}" onsubmit="return confirm('tem certeza?');">
          @csrf
          @method('DELETE')
          <button type="submit" class="button">Remover</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection