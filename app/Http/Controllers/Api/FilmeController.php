<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateFilmeRequest;
use App\Http\Resources\FilmeResource;
use App\Models\Filme;
use Illuminate\Http\Request;

class FilmeController extends Controller
{
    public function index()
    {
        $filme = Filme::paginate();

        return view('site.index', ['filmes' => FilmeResource::collection($filme)]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Filme::create($data);

        return redirect('/');
    }


    public function show(string $id)
    {
        $filme = Filme::findOrFail($id);
        return new FilmeResource($filme);
    }

    public function update(StoreUpdateFilmeRequest $request, string $id)
    {

        $filme = Filme::findOrFail($id);
        $data = $request->validated();
        $filme->update($data);

        return new FilmeResource($filme);
    }

    public function destroy(string $id)
    {
        $filme = Filme::findOrFail($id);
        $filme->delete();

        return response()->json([], 204);
    }
}
