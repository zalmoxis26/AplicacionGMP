<?php

namespace App\Exports;

use App\Pedidos;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ENOBRA implements FromView,WithDrawings, ShouldAutoSize
{
    
    
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('Pedidos.excell', [
            'pedidos' => Pedidos::query()
                ->where('dev', "EN OBRA")
                ->orderBy('fechaDev', 'ASC')
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