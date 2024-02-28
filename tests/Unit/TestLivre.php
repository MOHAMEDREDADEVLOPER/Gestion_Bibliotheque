<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class TestLivre extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function Livre_Test(): void
    {

        $donnees=[
            'titre'=>'Titre 1',
            'année_publication'=>'1999',
            'genre'=>'Genre 1',
            'résumé'=>'resume 1',
            'langue'=>'Francais',
            'nombre_exemplaires'=>'1',
            'disponible'=>'1',
            'image_couverture'=>'image1.png',
            'auteur_id'=>'5'
        ];
        $this->assertTrue(true);
    }
}
