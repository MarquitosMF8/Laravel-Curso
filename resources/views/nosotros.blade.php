@extends('plantilla')

@section('seccion')

<h1>Este es mi equipo de trabajo</h1>

@foreach ($equipo as $item)
    <a href="{{ route('nosotros',$item) }}" class="h4 text-danger">{{$item}}</a>  
@endforeach

@if(!empty($nombre))
  @switch($nombre)
      @case($nombre=='Ignacio')
          <h2 class="mt-5">El nombre es {{ $nombre }}:</h2>
          <p>{{ $nombre }} Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quam impedit eligendi adipisci nam doloribus, modi labore a iure error dignissimos vel porro placeat incidunt atque est corporis itaque saepe.</p>
          @break
        @case($nombre=='Juanito')
          <h2 class="mt-5">El nombre es {{ $nombre }}:</h2>
          <p>{{ $nombre }} Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quam impedit eligendi adipisci nam doloribus, modi labore a iure error dignissimos vel porro placeat incidunt atque est corporis itaque saepe.</p>
          @break
        @case($nombre=='Pedrito')
          <h2 class="mt-5">El nombre es {{ $nombre }}:</h2>
          <p>{{ $nombre }} Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quam impedit eligendi adipisci nam doloribus, modi labore a iure error dignissimos vel porro placeat incidunt atque est corporis itaque saepe.</p>
          @break
      @default
          
  @endswitch  
@endif

@endsection