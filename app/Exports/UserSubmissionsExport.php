<?php

namespace App\Exports;

use App\Models\UserSubmission;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UserSubmissionsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return UserSubmission::all(); 
    }

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Status',
            'Status',
            'Date',
            'Message',
        ];
    }
}
