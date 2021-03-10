use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Centre;

class TutoresController extends Controller
{
    $centre1 = new Centre;
           $centre1-> Denominacion=Francesc de Borja Moll;
           $centre1->Codigo=51633;
           $centre1->CIF=63755;
           $centre1->Titularidad=Publico
           $centre1-> Dir_postal=07011
           $centre1-> CP=07010
           $centre1-> Director_nom=Paco
           $centre1-> Director_apell=Gonzalez
           $centre1-> Director_apell2=Garcia  
           $centre1-> Identificada=Si
           $centre1->Tipo_identificada=DNI

           
           $centre2 = new Centre;
           $centre2-> Denominacion=Madina;
           $centre2->Codigo=51344;
           $centre2->CIF=262744;
           $centre2->Titularidad=Publico
           $centre2-> Dir_postal=07011
           $centre2-> CP=07010
           $centre2-> Director_nom=Pedro
           $centre2-> Director_apell=Gonzalez
           $centre2-> Director_apell2=Martín
           $centre2-> Identificada=Si
           $centre2->Tipo_identificada=DNI
        
        $centre1->save();
        $centre2->save();

        return $request;
    }