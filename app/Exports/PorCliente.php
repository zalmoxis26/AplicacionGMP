<?php

namespace App\Exports;

use App\Pedidos;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use Carbon\Carbon;
use \Maatwebsite\Excel\Sheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PorCliente implements FromView, WithDrawings, WithEvents, WithColumnFormatting, ShouldAutoSize
{ 
    public function columnFormats(): array
    {
        return [
            'H' => NumberFormat::FORMAT_NUMBER,
            'I' => NumberFormat::FORMAT_CURRENCY_USD_SIMPLE,
            'F' => NumberFormat::FORMAT_CURRENCY_USD_SIMPLE,
        ]; 
    }
    
    
    /**
    * @return \Illuminate\Support\Collection
    */
    
    public function __construct($cliente) {
        $this-> nombre=$cliente['cliente_id'];
    }

    
      

    public function view(): View
    {
      $fecha= Carbon::now();  
      $fecha->month=01;
      $fecha->day=01;
      
     Sheet::macro('styleCells', function (Sheet $sheet, string $cellRange, array $style) {
    $sheet->getDelegate()->getStyle($cellRange)->applyFromArray($style);
});   
        
        return view('Pedidos.excelCliente', [
            'pedidos' => Pedidos::query()->where("cliente_id", $this->nombre)
             ->whereBetween('fechaRem',array($fecha,Carbon::now()))
            ->orderBy('fechaRem','DESC')
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
    
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
              
                $event->sheet->styleCells(
                    'A12:K400',
                    [
                        'borders' => [
                            'allBorders' => [
                                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                                'color' => ['argb' => 'FF000000'],
                            ],
                        ]
                    ]
                );
                
                $event->sheet->styleCells(
                    'A10:D11',
                    [
                        'borders' => [
                            'allBorders' => [
                                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                                'color' => ['argb' => 'FF000000'],
                            ],
                        ],
                        'font' => array (
                       'bold'      =>  true)
                    ]
                              
    
                );
                
                $event->sheet->styleCells(
                    'A12:K12',
                    [
                        'borders' => [
                            'allBorders' => [
                                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                                'color' => ['argb' => 'FF000000'],
                            ],
                        ],
                        'font' => array (
                       'bold'      =>  true)
                    ]
                              
    
                );
                
            },
        ];
       
            
    }

     
   
}  

