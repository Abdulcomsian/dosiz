<?php

namespace App\Exports;

use App\Subscriber;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithMapping;

class SubscribersExport implements FromCollection, WithHeadings, ShouldAutoSize, WithStyles , WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Subscriber::select(
            'name',
            'email',
            'phone',
            'type'
        )->orderBy('type','asc')->get();
    }

    public function headings(): array
    {
        return [
            'Name',
            'Subscriber Email',
            'Phone Number',
            'User Type',
        ];
    }
    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true]],
        ];
    }

    public function map($invoice): array
    {
        if($invoice->type==1)
        {
            $manual = 'FrontEnd User';
        }
        else if($invoice->type == 2)
        {
            $manual = 'Manual User';
        }
        else
        {
            $manual = 'Import subscriber';
        }
        return [
            $invoice->name,
            $invoice->email,
            $invoice->phone,
            $manual,

        ];
       
    }
}
