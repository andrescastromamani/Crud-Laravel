@extends('plantilla')

@section('seccion')
    <h1>Este es mi esquipo de Trabbajo</h1>
    @foreach ($equipo as $miembro)
        <a href="{{ route('nosotros',$miembro)}}" class="h4 text-danger">{{$miembro}}</a><br>
    @endforeach
    @if (!empty($nombre))
        @switch($nombre)
            @case($nombre == 'Andres')
                <h2 class="mt-5">el nombre {{$nombre}}</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea qui voluptatum ratione illum? Nostrum, velit nulla? Porro aspernatur, in laborum magni debitis doloribus eius voluptatum, possimus at dicta veniam placeat.</p>
                @break
            @case($nombre == 'Daniel')
                <h2 class="mt-5">el nombre es {{$nombre}}</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, pariatur quisquam. Pariatur tempora excepturi ut labore quae aut quia fuga ex, et doloremque aliquam impedit itaque placeat recusandae minima quaerat!</p>
                @break
            @case($nombre == 'Rimer')
                <h2 class="mt-5">el nombre es {{$nombre}}</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum corporis, illo nesciunt deleniti architecto ex laboriosam quibusdam in harum perspiciatis distinctio laborum necessitatibus non explicabo repudiandae, dignissimos quam ad aspernatur!</p>
                @break
            @case($nombre == 'Fidel')
                <h2 class="mt-5">el nombre es {{$nombre}}</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque corrupti iste voluptatem, cumque delectus iure placeat necessitatibus quidem dolores deserunt harum doloribus dolore perferendis pariatur fuga neque earum dicta fugiat?</p>
                @break
            @case($nombre == 'Ariel')
                <h2 class="mt-5">el nombre es {{$nombre}}</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos eligendi iure sit commodi iste enim! Quas debitis nam cumque nihil labore maxime in velit harum fugiat mollitia, delectus non et?</p>
                @break
            @default
                
        @endswitch
    @endif
@endsection