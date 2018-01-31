<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Model\Order;
use App\Model\OrderStdate;
use App\Model\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class OrderController
 * @package App\Http\order\Controllers
 */
class OrderController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        return Order::all();
    }
    
    /**
     *
     */
    public function showMy()
    {
    
        $user = Auth::guard('api')->user();
      
        return Order::where('user_id',$user->id)->get();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {

        return Order::find($id);
    }
    
    /**
     * @param array $data
     * @return mixed
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'user_id' => 'required|integer',
            'status_id' => 'required|integer',
            'name' => 'required',
            'password' => 'required',
        ]);
    }
    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
    
        $results = Order::create($request->all());
        
        
        $results_array=json_decode($results,true);
        

        $OrderStdate = new OrderStdate;
    
        $OrderStdate->order_id  = $results_array['id'];
        $OrderStdate->status_id = 1;
        $OrderStdate->created_at = date("Y-m-d H:i:s");
    
        $OrderStdate->save();
        
        return $results;
    }
    
    /**
     * @param null $id
     * @return mixed
     */
    public function showStdate($id)
    {
          return OrderStdate::find($id);
    }
    /**
     * @param null $id
     * @return mixed
     */
    public function showStdateOrder($id)
    {
        return OrderStdate::where('order_id',$id)->get();
    }
    /**
     * @param Request $request
     * @return mixed
     */
    public function storeStdate(Request $request)
    {
        return OrderStdate::create($request->all());
    }
    
    /**
     * @param $id
     * @return mixed
     */
    public function showComment($id)
    {
        return Comment::find($id);
    }
    /**
     * @param Request $request
     * @return mixed
     */
    public function storeComment(Request $request)
    {
        return Comment::create($request->all());
    }
    
    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function update(Request $request, $id)
    {
        $article = Order::findOrFail($id);
        $article->update($request->all());
        
        return $article;
    }
    
    /**
     * @param Request $request
     * @param $id
     * @return int
     */
    public function delete(Request $request, $id)
    {
        $article = Order::findOrFail($id);
        $article->delete();
        
        return 204;
    }
}
