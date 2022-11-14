<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{

    public function index()
    {
        return Clients::all();
    }

    public function store(Request $request)
    {
        Clients::create($request->all());
    }

    public function show($id)
    {
        return Clients::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $client = Clients::findOrFail($id);
        $client->update($request->all());
    }

    public function destroy($id)
    {
        $client = Clients::findOrFail($id);
        $client->delete();
    }
}
