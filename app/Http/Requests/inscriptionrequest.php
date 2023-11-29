namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InscriptionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "nom_de_l_eleve" => 'required|min:100',
            "prenom_de_l_eleve" => 'required|min:100',
            "genre_de_l_eleve" => 'required|min:100',
            "email_de_l_eleve" => 'required|email',
            "extrait_de_naissance_de_l_eleve => 'required|min:100',
            "bulletin_de_l_eleve" => 'required|min:100',,
            "nom_complet_du_pere" => 'required|min:100',,
            "nom_complet_de_la_mere" => 'required|min:100',,
            "email_du_pere" => 'required|min:email',,
            "email_de_la_mere" => 'required|email',,
            "tel_du_pere" => 'required|min:100',,
            "tel_de_la_mere" => 'required|min:100',,
        ];
    }
}
