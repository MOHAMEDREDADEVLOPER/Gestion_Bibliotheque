<?php

namespace App\Imports;

use App\Models\Livre;
use Maatwebsite\Excel\Concerns\ToModel;

class LivresImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        
        if (isset($row[1])) {
            return new Livre([
                'id'     => $row[0],
                'titre'    => $row[1], 
                'année_publication'    => $row[2],
                'genre'    => $row[3],
                'résumé'    => $row[4],
                'langue' => $row[5],
                'nombre_exemplaires' => $row[6],
                'disponible' => $row[7],
                'image_couverture' => $row[8],
                'auteur_id' => $row[9],
            ]);
        }
    }
}
