namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email|unique:users',
            'roles' => 'required|array',
        ]);

        $user = User::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'roles' => json_encode($request->roles),
        ]);

        return response()->json($user, 201);
    }
}
