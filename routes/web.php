use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuplierController;

Route::get('/', function () {
    return view('home');
});

// Route for suplier.index
Route::get('/supliers', [SuplierController::class, 'index'])->name('suplier.index');
