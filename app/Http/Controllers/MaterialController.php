<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;
use App\Http\Requests\MaterialRequest;
use Carbon\Carbon;


class MaterialController extends Controller
{
    // Lista de materiais
    public function index()
    {
        $materials = Material::all();
        return view('material.material_list', ['materials' => $materials]);
    }

    // Detalhes de um material específico
    public function show($id)
    {
        $material = Material::findOrFail($id);
        return view('material.material_detail', ['material' => $material]);
    }

    // Criar um novo material
    public function create()
    {
        return view('material.material_form');
    }


    public function store(Request $request)
    {

        $data = $request->all();
        // Definindo a data/hora formatada manualmente
        $data['created_at'] = Carbon::now()->format('Y-m-d\TH:i:s');
        $data['updated_at'] = Carbon::now()->format('Y-m-d\TH:i:s');
        
        $material = Material::create($data);
        return redirect()->route('material.show', ['id' => $material->id]);
    }

    // Editar um material existente


    // Editar um pedido existente
    public function edit($id)
    {
        $material = Material::findOrFail($id);
        return view('material.material_form', compact('material'));
    }

    public function update(Request $request, $id)
    {
        $material = Material::findOrFail($id);
        $material->update([
            'name' => $request->input('name'),
            'type' => $request->input('type'),
            'description' => $request->input('description'),
            'thickness' => $request->input('thickness'),
            'width' => $request->input('width'),
            'height' => $request->input('height'),
            'color' => $request->input('color'),
            'manufacturer' => $request->input('manufacturer'),
            'manufacturer_code' => $request->input('manufacturer_code'),
            'price' => $request->input('price'),
            'update_at' => Carbon::now()->format('Y-m-d\TH:i:s'),
        ]);
        
        return redirect()->route('material.index')->with('success', 'Order updated successfully!');
    }

    // Deletar um material existente
    public function destroy($id)
    {
        $material = Material::findOrFail($id);
        $material->delete();

        return redirect()->route('material.index');
    }
}