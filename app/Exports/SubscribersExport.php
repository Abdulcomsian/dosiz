<?php

namespace App\Exports;

use App\Subscriber;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class SubscribersExport implements FromCollection, WithHeadings, ShouldAutoSize, WithStyles 
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
            'subscriber_list_id'
        )->orderBy('subscriber_list_id','asc')->get();
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

}
