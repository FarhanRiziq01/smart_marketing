namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // Mengambil semua data pembelian untuk admin
        $purchases = Purchase::all();
        return view('admin.dashboard', compact('purchases'));
    }
}