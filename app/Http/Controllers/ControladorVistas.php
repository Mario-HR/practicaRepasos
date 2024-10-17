<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVistas extends Controller
{
    public function inicio() {
        return view('inicio');
    }
    public function repaso1() {
        return view('repaso1');
    }
    public function calcRepaso1(Request $peticion) {
        $this->cantidad = $peticion->input('cantidad');
        $this->conversionUnidades = $peticion->input('conversionUnidades');
        [$this->cantidadResultante,$this->unidad,$this->unidadResultante] = $this->convertirUnidades($this->cantidad,$this->conversionUnidades);
        return "Datos a convertir: ".$this->cantidad.$this->unidad."\nResultado: ".$this->cantidadResultante.$this->unidadResultante;
    }
    private function convertirUnidades($cantidad, $conversionUnidades){
        switch ($conversionUnidades) {
            case 'mb-gb':
                $unidadOrigen = 'MB';
                $unidadDestino = 'GB';
                $factorConversion = 1/1000;
                break;
            case 'gb-mb':
                $unidadOrigen = 'GB';
                $unidadDestino = 'MB';
                $factorConversion = 1000;
                break;
            case 'gb-tb':
                $unidadOrigen = 'GB';
                $unidadDestino = 'TB';
                $factorConversion = 1/1000;
                break;
            case 'tb-gb':
                $unidadOrigen = 'TB';
                $unidadDestino = 'GB';
                $factorConversion = 1000;
                break;
        }
        return [$cantidad*$factorConversion, $unidadOrigen, $unidadDestino];
    }
}
