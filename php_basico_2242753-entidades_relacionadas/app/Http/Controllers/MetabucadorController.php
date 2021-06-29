<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabucadorController extends Controller
{
    //El controlador esta compuesto de acciones
    //Cada accion estara vinculada a su correspondiente ruta

     public function mostrar_formulario(){
        //mostrar la vista del metabuscador
        return view('metabuscador');
    }

    //realizar la busqueda por motor
    public function buscar_termino(){
        //realizar la busqueda
        $termino = $_POST["termino"];
        $motor = $_POST["motores"];

        // La busqueda se realiza acorde al motor
        // de busqueda elegido

        switch($motor){
            case 1: return redirect()->to("https://www.google.com/search?q=$termino");
                break;
            case 2: return redirect()->to("https://www.bing.com/search?q=$termino");
                break;
            case 3: return redirect()->to("https://www.youtube.com/results?search_query=$termino");
                break;
            case 4: return redirect()->to("https://www.linkedin.com/search/results/all/?keywords=$termino");
                break;
            case 5: return redirect()->to("https://twitter.com/search?q=$termino");
                break;
            case 6: return redirect()->to("https://scholar.google.es/scholar?hl=es&as_sdt=0%2C5&q=$termino");
                break;
            case 7: return redirect()->to("http://www.picsearch.es/index.cgi?q=$termino");
                break;
            case 8: return redirect()->to("https://www.google.com/search?tbm=bks&q=$termino");
                break;
            case 9: return redirect()->to("https://www.amazon.com/s?k=$termino");
                break;
            case 10: return redirect()->to("https://www.linio.com.co/search?scroll=&q=$termino");
                break;

        }


    }

}
