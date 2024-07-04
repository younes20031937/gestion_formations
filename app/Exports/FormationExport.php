<?php

namespace App\Exports;

use App\Models\Formation;
use Maatwebsite\Excel\Concerns\FromCollection;

class FormationExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Formation::all();
    }
}
