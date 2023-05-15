<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Psy\debug;

class ResultatController extends Controller
{
    public function init()
    {
        return view('menu.vie_estudiantine.resultat_init');
    }

    public function get(Request $request)
    {
        // On vérifie d'abord que les 3 champs sont bien indiqués
        $request->validate([
            'matricule' => 'required|string',
            'dateNaiss' => 'required|date',
            'anneeAca' => 'required|regex:/\d{4}-\d{4}/',
        ], [
            'matricule.required' => 'Le numéro matricule est obligatoire.',
            'dateNaiss.required' => 'La date de naissance est obligatoire.',
            'dateNaiss.date' => 'Le format de la date de naissance est invalide (ex: 01-01-2000).',
            'anneeAca.required' => 'L\'année académique est obligatoire.',
            'anneeAca.regex' => 'Le format de l\'année académique est invalide (ex: 2012-2013).',
        ]);

        // Si tout va bien on récupère matricule et annéeAca
        $matricule = $request->matricule;
        $anneeAca = $request->anneeAca;

        // On vérifie si la date de Naissance correspond au matricule
        $dateNaissVerifie = DB::table('etudiants')
            ->where('matricule', '=', $matricule)
            ->select('dateNaiss')
            ->get();

        // Instructions à executer quand aucun enregistrment n'est trouvé
        // C'est très simple, si le Matricule renseigné par l'utilisateur existe, une date de Naissance y est forcément associée
        if ($dateNaissVerifie->count() == 0) {
            session()->flash('error', 'Aucun enregistrement trouvé pour le matricule spécifié.');
            return redirect()->back();
        }

        // Instructions à exécuter quand la date de Naissance ne correspond pas au Matricule
        if ($dateNaissVerifie[0]->dateNaiss != $request->dateNaiss) {
            session()->flash('error', 'La Date de Naissance ne correspond pas au Matricule.');
            return redirect()->back();
        }

        // Quand les deux conditions precedentes sont verifiees on collecte des informations sur l'ETUDIANT
        $etudiant = DB::table('etudiants')
            ->where('matricule', '=', $matricule)
            ->select(
                'matricule',
                'nom',
                'prenoms',
                'dateNaiss',
                'lieuNaiss',
                'sexe',
            )
            ->get();

        $etudiant = $etudiant[0];

        // On collectionne ses Notes selon L'ANNEE ACA renseignée
        $notes = DB::table('etudiants')
            ->select(
                DB::raw('ecus.libUe, GROUP_CONCAT(ecus.libEcu ORDER BY ecus.libEcu) as libEcu'),
                DB::raw('GROUP_CONCAT(note_ecus.note ORDER BY ecus.libEcu) as note')
            )
            ->join('note_ecus', 'etudiants.matricule', '=', 'note_ecus.matricule')
            ->join('ecus', 'note_ecus.codeEcu', '=', 'ecus.codeEcu')
            ->where('note_ecus.matricule', '=', $matricule)
            ->where('note_ecus.anneeAca', '=', $anneeAca)
            ->groupBy('ecus.libUe')
            ->get();


        $decision = DB::table('decision_annee_acas')
            ->where('matricule', '=', $matricule)
            ->where('anneeAca', '=', $anneeAca)
            ->select('anneeAca', 'decision')
            ->get();

        if ($decision->count() == 0) {
            $inscription = DB::table('inscriptions')
                ->where('matricule', '=', $matricule)
                ->where('anneeAca', '=', $anneeAca)
                ->count();
            if ($inscription == 0) {
                session()->flash('error', 'Vous n\'avez pas d\'inscription pour ' . $anneeAca);
                return redirect()->back();
            } else {
                session()->flash('error', 'Pas encore de décision du Jury pour ' . $anneeAca);
                return redirect()->back();
            }
        }

        $decision = $decision[0];

        $classe = DB::table('inscriptions')
            ->join('classes', 'inscriptions.codeClasse', '=', 'classes.codeClasse')
            ->where('inscriptions.matricule', '=', $matricule)
            ->where('inscriptions.anneeAca', '=', $anneeAca)
            ->select('classes.libClasse')
            ->get();
        $classe = $classe[0];

        return view('menu.vie_estudiantine.resultat_get', compact(['etudiant', 'notes', 'classe', 'decision']));
    }
}
