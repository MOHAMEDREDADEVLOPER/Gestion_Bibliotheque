<?php

namespace App\Exports;

use App\Models\Emprunt;
use Maatwebsite\Excel\Concerns\FromCollection;

class EmpruntsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Emprunt::all();
    }
}
