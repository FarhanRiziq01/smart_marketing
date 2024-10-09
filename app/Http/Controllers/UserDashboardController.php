namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index()
    {
        // Mengambil data pembelian user yang sedang login
        $purchases = Purchase::where('user_id', Auth::id())->get();
        return view('user.dashboard', compact('purchases'));
    }
}
