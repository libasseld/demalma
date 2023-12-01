<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Http\Request;
use PDF;

class TestController extends Controller
{
    public function test_pdf(){
        $demande = Demande::with('offre')->where('paiement',1)->first();
        
        $numero = "DEM-".str_pad($demande->offre->id, 2, '0', STR_PAD_LEFT)."-".str_pad($demande->id, 4,0,STR_PAD_LEFT);
        
        /* $pdf = PDF::loadView('pdfs.facture', [
            'demande' => $demande,
            'numero' => $numero,
        ]);
        return $pdf->download('invoice.pdf'); */
        return view('pdfs.facture', [
            'demande' => $demande,
            'numero' => $numero,
        ]);
    }
}
