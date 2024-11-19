namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuplierController extends Controller
{
    public function index()
    {
        // Fetch data from your database, e.g., $supliers = Suplier::all();
        $supliers = []; // Replace with actual data from your model or database
                        // find an example of whats above
        // Return the view with the data
        return view('suplier.index', compact('supliers'));
    }
}
