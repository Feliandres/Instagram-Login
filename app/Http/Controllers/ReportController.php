<?php

namespace App\Http\Controllers;

use App\Models\Informe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
<<<<<<< HEAD

=======
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
>>>>>>> 185fbc216e0c77bddcc1f968a3928b8ec7abb7d6
class ReportController extends Controller
{
    //
    public function index (Request $request)
    {
        //Busqueda de informacion
        $texto = trim($request->get('texto'));
<<<<<<< HEAD
        $reportes = Informe::with('user')->get();
=======
        $reportes = informe::with('user')->get();
>>>>>>> 185fbc216e0c77bddcc1f968a3928b8ec7abb7d6
        return view ('report.index')->with('reportes',$reportes);
    }

    public function create()
    {
        //
        return view ('report.create');
    }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id=Auth::id();
        //Campos a validar
        $campos=[
            'title'=>'required|string|max:50',
<<<<<<< HEAD
            'information'=>'required|string|min:200',
=======
            'information'=>'required|string|max:200',
>>>>>>> 185fbc216e0c77bddcc1f968a3928b8ec7abb7d6
            'image'=>'required|max:1000|mimes:jpeg,png,svg,jpg',
        ];

        //mensajes de error
        $mensaje=[
            'title.required' => 'Te falta el título :(',
            'information.required' => 'Recuerda la información',
            'image.required' => 'Pon una imagen para mejor visibilidad',
        ];

        $this->validate($request, $campos, $mensaje);
<<<<<<< HEAD
        //Conseguir datos
        $datosReporte = $request-> except('_token');
        if($request -> hasFile('image')){
            $datosReporte['image'] = $request -> file('image')->store('uploads','public');
        }
        $datosReporte['user_id'] = $user_id;

        Informe::insert($datosReporte);
        return to_route('report')->with('mensaje','Registro Creado');
=======
        

            // Obtener el archivo de imagen del formulario
        $imagePath = $request->file('image')->getRealPath();

        // Cargar la imagen en Cloudinary
        $uploaded = Cloudinary::upload($imagePath, [
            'folder' => 'my_folder',
            'public_id' => 'my_image',
        ]);

        // Obtener la URL segura de la imagen cargada
        $imageUrl = $uploaded->getSecurePath();

        // Crear un nuevo producto y asignar la URL de la imagen cargada al campo de imagen_url
        $informe = new Informe();
        $informe->title = $request->title;
        $informe->information = $request->information;
        $informe->image= $imageUrl;
        $informe->user_id = Auth::id();
        $informe->save();

        // Redirigir al usuario a la página del producto creado
        return to_route('report')->with('mensaje','Registro Creado');
>>>>>>> 185fbc216e0c77bddcc1f968a3928b8ec7abb7d6
    }

}
