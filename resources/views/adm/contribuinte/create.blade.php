@extends('adm.layout')

@section('content')

@if(count($errors) > 0)
<ul class="validator">
  @foreach($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach
</ul>
@endif
<form method="POST" action="{{url('contribuinte')}}">
    @csrf
    @method('POST')
    <div class="row">
        <label class="col-1" for="user">Nome</label>
        <select class="col-4" name="user_id" id="user">
            <option></option>
            @foreach($users as $user)
                <option value="{{$user->id}}" @if($user->id==old('user_id')) selected @endif>{{$user->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="row">
        <label class="col-1" for="tel">Telefone</label>
        <input type="text" name="telefone" id="tel" class="col-4" value="{{ old('telefone') }}" />
    </div>
    <div class="row">
        <label class="col-1" for="val">Valor</label>
        <input type="text" name="valor" id="val" class="col-4" value="{{ old('valor') }}" />
    </div>
    <div><button type="submit" class="button">Salvar</button></div>
</form>

@endsection