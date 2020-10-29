<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;


class DesdeFecha implements FromView, WithDrawings
{ use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */

public function __construct( $columna, $fechaINI, $fechaFIN)
    {
        $this->INI = $fechaINI;
        $this->FIN= $fechaFIN;
        $this->Colum=$columna;
    }

public function view(): View
    {
        return view('Pedidos.excell', [
            'pedidos' => DB::table('pedidos')->WhereBetween($this->Colum,array($this->INI,$this->FIN))
            ->orderBy($this->Colum, "ASC")
            ->get()
        ]);
    }

    public function drawings()
    {
        $drawing = new Drawing();
        $drawing->setName('Logo');
        $drawing->setDescription('This is my logo');
        $drawing->setPath(public_path('/images/logo.jpg'));
        $drawing->setHeight(170);
        $drawing->setCoordinates('A1');

        return $drawing;
    }




}
/*
    public function __construct(string $peticion, string $campo)
    {
        $this->peticion=$peticion;
        $this->columna=$campo;
    }
    
    
    public function query(){
        
        
        return Pedidos::query()->whereBetween($this->peticion, $this->columna);
    }


    public function headings(): array{
        return [
            'ID',
            'REMISION',
            'FECHA REM',
            'DEV',
            'FECHA DEV',
            'CLIENTE',
            'EQUIPO',
            'PRECIO',
            'PIEZAS',
            'DIAS',
            'IMPORTE',
            'OBRA',
            'PAGADO',
            'CREADO',
            'ACTUALIZADO',
        ];
    }
}*/


