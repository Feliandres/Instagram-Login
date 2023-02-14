@extends('layouts.template')
@section('subtitle','ver')

@section('content')
  @if (Session::has('mensaje'))
  <div class="p-4 mb-4 mx-12 mt-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
    <span class="font-medium">{{ Session::get('mensaje') }} </span> 
  </div>
  @endif

  <div class="flex justify-end">
    <a class="btn btn-accent m-4 bg-emerald-300 px-10 hover:bg-emerald-500 hover:border-inherit border-inherit" href="{{url('report/create')}}"><img src="{{asset ('storage/add_icon.png')}}" alt="add.svg" class="w-12 p-2"></a>
  </div>
  <!--Search-->
  <form action="{{url('/report')}}" method="get" class="flex items-center justify-start lg:mx-48 w-3/12">   
      <label for="simple-search" class="sr-only">Buscar</label>
      <div class="relative w-full">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
        </div>
        <input type="text" name="texto" id="simple-search" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="Buscar" required>
      </div>
      <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        <span class="sr-only">Buscar</span>
      </button>
  </form>
<!--End Search-->
<!--Show-->
    @if (count($reportes)<=0)
      <span class="font-extrabold text-blue-500">
        No se encontro ningún registro
      </span>
            
    @else
    @foreach ($reportes as $reporte)
    <div class="p-12">
      <div class="card h-96 card-side glass hover:backdrop-saturate-50 hover:bg-white/30 hover:text-neutral-700 shadow-xl">
        <figure><img class="w-auto h-auto " src="{{asset ('storage').'/'.$reporte->image}}"  alt="image" /></figure>
        <div class="card-body p-4 w-96">
            <h2 class="card-title italic text-2xl hover:text-stone-900">{{$reporte -> title}}</h2>
            <p class="hover:text-stone-900 italic text-base">{{$reporte -> information}}</p>
            <h3 class="justify-start text-xl hover:text-stone-900">Autor: {{$reporte->user->username}}</h3>
            <div class="card-actions justify-end">
            </div>
        </div>
      </div>

    </div>
    @endforeach
    @endif
<!--EndShow-->
@endsection