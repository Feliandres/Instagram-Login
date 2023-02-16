
@if(count($errors)>0)
    <div class="alert alert-error shadow-lg">
    <div>
        <ul>
            @foreach( $errors -> all() as $error)
            <li class="flex flex-row">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <span>{{$error}}</span>
            </li>
            @endforeach
        </ul>
    </div>
    </div>
@endif

<div class="form-control w-full max-w-xs">
<label class="label">
    <span class="label-text">Titulo</span>
</label>
<input type="text" name="title" value="" placeholder="Type here" class="input input-bordered w-full max-w-xs bg-white" />
<label class="label">
    <span class="label-text-alt">Se claro</span>
</label>
</br>
<textarea class="textarea textarea-bordered" name="information" placeholder="Detalles aquí"></textarea>
</br>
<input type="file" name="image" class="file-input file-input-bordered file-input-warning w-full max-w-xs" />
</div>
<br>
<div class="flex justify-center">
    <a class="btn btn-xs bg-gray-400 sm:btn-sm md:btn-md lg:btn-lg rounded-lg text-black border-inherit hover:text-white mx-4 hover:bg-gray-600" href="{{url('report/')}}">Volver</a>
    <input type="submit" value="Crear" class="btn btn-xs sm:btn-sm md:btn-md bg-blue-500 lg:btn-lg rounded-lg text-black border-inherit hover:text-white hover:bg-blue-600"/>
    
</div>

