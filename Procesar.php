<?php

class Procesar{
    private $json = __DIR__.'./registros.json';
    function json_validate(string $texto): bool{
        json_decode($texto);
        return json_last_error() === JSON_ERROR_NONE;
    }
    function leer(){
        $peliculas = [];
        $json = file_get_contents($this->json);
        if($this->json_validate($json)){
            $peliculas = json_decode($json);
        }
        return $peliculas;
    }
    function obtenerPelicula($i){
        $peliculas = $this->leer();
        $peli = (array_key_exists($i, $peliculas) ? $peliculas[$i] : new stdClass([]));
        /*if(array_key_exists($i, $peliculas)){
            $peli = $peliculas[$i];
        }
        else{
            $peli = new stdClass([]);
        }*/
        return $peli;
    }
    function editar($i, $pe, $prota, $gen, $cla, $dura, $file) : string{
        $peliculas = $this->leer();
        if(array_key_exists($i, $peliculas)){
            $peliculas[$i]->pelicula = $pe;
            $peliculas[$i]->protagonistas = $prota;
            $peliculas[$i]->genero = $gen;
            $peliculas[$i]->clasificacion =$cla;
            $peliculas[$i]->duracion = $dura;
            if($file['name'] != ''){
                $this->eliminarImagen($peliculas[$i]->portada);
                $peliculas[$i]->portada = $file['name'];
                $this->guardaImagen($file);
            }
            file_put_contents($this->json, json_encode($peliculas));
            return 'Pelicula Editada';
        }
        else{
            return 'NO';
        }
    }
    function eliminar($i) : string{
        $peliculas = $this->leer();
        if(array_key_exists($i, $peliculas)){
            $this->eliminarImagen($peliculas[$i]->portada);
            unset($peliculas[$i]);
            file_put_contents($this->json, json_encode($peliculas));
            return 'Pelicula Eliminada';
        }
        else{
            return 'NO';
        }
    }
    function guardar($pe, $prota, $gen, $cla, $dura, $file): string{
        try {
            $pelis = $this->leer();
            $nueva = ['pelicula'=>$pe, 'protagonistas'=>$prota, 'genero'=>$gen, 'clasificacion'=>$cla, 'duracion'=>$dura, 'portada'=>$file['name']];
            $pelis[] = $nueva;
            file_put_contents($this->json, json_encode($pelis));
            $this->guardaImagen($file);
            return 'Pelicula Guardada';
        } catch (Exception $ex) {
            return 'NO';
        }
    }
    function guardaImagen($img) :void{
        $ubicacion = __DIR__.'/imagenes/'.$img['name'];
        copy($img['tmp_name'], $ubicacion); //tmp es la propiedad de la imagen
    }
    function eliminarImagen($img) : void{
        unlink(__DIR__.'/imagenes/'.$img);
    }
}

