<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    protected $table = 'inscript';
        protected $fillable = [
        'nom_de_l_eleve',
        'prenom_de_l_eleve',
        'genre_de_l_eleve',
        'email_de_l_eleve',
        'extrait_de_naissance_de_l_eleve',
        'bulletin_de_l_eleve',
        'nom_complet_du_pere',
        'nom_complet_de_la_mere',
        'email_du_pere',
        'email_de_la_mere',
        'tel_du_pere',
        'tel_de_la_mere',
    ];

    /**
     * Met à jour l'inscription avec les attributs fournis.
     *
     * @param array $data
     * @return bool
     */
    public function updateInscription(array $data)
    {
        return $this->update($data);
    }

    /**
     * Crée une nouvelle inscription avec les attributs fournis.
     *
     * @param array $data
     * @return Inscription
     */
    public static function createInscription(array $data)
    {
        // Créez une nouvelle inscription
        $inscription = new Inscription();

        // Affectez les données à l'inscription
        $inscription->fill($data);

        // Enregistrez l'inscription dans la base de données
        $inscription->save();

        return $inscription;
    }

    /**
     * Supprime l'inscription avec l'ID fourni.
     *
     * @param int $id
     * @return bool|null
     */
    public static function deleteInscription($id)
    {
        // Obtenez l'inscription à supprimer
        $inscription = Inscription::findOrFail($id);

        // Supprimez l'inscription de la base de données
        return $inscription->delete();
    }
}
