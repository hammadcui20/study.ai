<?php
  
namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use DB;
    
class ChartJSController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $users = User::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(DB::raw("Month(created_at)"))
                    ->pluck('count', 'month_name');
 
        $labels = $users->keys();
        $data = $users->values();
        return view('chart', compact('labels', 'data'));
    }

    public function tailor()
    {
        // $u_id = Category::where('name', Auth::user()->name)->get()->id;
        // echo $u_id;
        $users = OrderItem::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
        // ->where('cat_id',$u_id)
        ->whereYear('created_at', date('Y'))
        ->groupBy(DB::raw("MONTH(created_at)"))
        ->pluck('count', 'month_name');
 
        $labels = $users->keys();
        $data = $users->values();
        return view('tailor.chart', compact('labels', 'data'));
    }
}