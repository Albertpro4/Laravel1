@extends('layouts/app')



@section('title') Отзывы

@endsection

@section('main_content')
    <h1>Форма обработки</h1>
      
      
      @if($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
      @endif


   <form method="POST" action="/review/check">
    @csrf
      <input type="email" name="email" id="email" placeholder="Введите емайл" class="form-control"><br> 
        <input type="text" name="subject" id="subject" placeholder="Введите отзыв" class="form-control"><br> 
          <textarea  name="message" id="message" placeholder="Введите сообщение" class="form-control"></textarea><br> 
          <button type="submit" class="btn btn-success">Отправить</button><br> 
   </form>

@endsection