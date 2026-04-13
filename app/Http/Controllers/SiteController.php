<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    // Données pour la page d'accueil
   public function index()
{
    $chiffres = [
        ['nombre' => '+1 500', 'label' => 'Apprenants formés'],
        ['nombre' => '5+ ans', 'label' => 'Expertise éprouvée'],
        ['nombre' => '2025', 'label' => 'Prix de l’Innovation']
    ];

    $poles = [
        ['id' => 'etudes', 'titre' => 'Études & Réalisation', 'details' => 'Faisabilité, Business Plans, Prospection.'],
        ['id' => 'construction', 'titre' => 'Aménagement & Construction', 'details' => 'Systèmes hors-sol, Cages flottantes, Bassins.'],
        ['id' => 'gestion', 'titre' => 'Accompagnement & Gestion', 'details' => 'Suivi technique, Audits de fermes.'],
        ['id' => 'formation', 'titre' => 'Formation', 'details' => 'Transfert de compétences et renforcement technique.']
    ];

    return view('welcome', compact('chiffres', 'poles'));
}

    // Données pour la page Expertise (plus détaillées)
    public function expertise()
    {
        $poles = [
            [
                'titre' => 'Études et Réalisation',
                'details' => 'Faisabilité, Business Plans, Prospection de sites.'
            ],
            [
                'titre' => 'Aménagement et Construction',
                'details' => 'Systèmes hors-sol, Cages flottantes, Bassins.'
            ],
            [
                'titre' => 'Accompagnement et Audit',
                'details' => 'Suivi technique, Audits de fermes, Gestion déléguée.'
            ],
            [
                'titre' => 'Formation',
                'details' => 'Transfert de compétences et renforcement technique.'
            ]
        ];

        return view('expertise', compact('poles'));
    }
}