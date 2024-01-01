<?php

namespace App\Exports;

use App\Models\StockHistory;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;

class TemplateOpanameStock implements FromArray, WithHeadings, ShouldAutoSize, WithEvents
{
        /**
     * @return \Illuminate\Support\Collection
     */
    function array(): array
    {
        $riwayat = StockHistory::select('product_id')->groupby('product_id')->orderby('product_id','desc')->get();
        if ($riwayat->isNotEmpty()) {

            foreach ($riwayat as $r)
            {
                $item['product'] = $r->product->nama ?? '';
                $item['stock'] = $r->product->stock ?? 0;
                $item['unit'] = $r->product->unit_jual->name ?? '';
                $item['modal'] = $r->product->modal ?? 0;
                $data[] = $item;
            }
        } else {
            $data = [];
        }

        return $data;
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $cellRange = 'A1:D1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);

                $styleArray = [
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                            'color' => ['argb' => 'FFFF0000'],
                        ],
                    ],

                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_RIGHT,
                    ],

                    'fill' => [
                        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                        'color' => ['argb' => 'B8860B']
                    ]
                ];

            },
        ];

    }

    public function headings(): array
    {
        return [
            'Nama Produk',
            'Stock',
            'Satuan',
            'Modal',
        ];
    }
}
