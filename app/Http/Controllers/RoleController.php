<?php

namespace App\Http\Controllers;

use App\model\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        return Role::all();
    }
    
    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return Role::find($id);
    }
    
    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        return Role::create($request->all());
    }
    
    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function update(Request $request, $id)
    {
        $article = Role::findOrFail($id);
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
        $article = Role::findOrFail($id);
        $article->delete();
        
        return 204;
    }
}
