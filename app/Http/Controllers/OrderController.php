<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Material;
use App\Http\Requests\OrderRequest;

use Carbon\Carbon;

class OrderController extends Controller
{
    // Lista de pedidos
    public function index()
    {
        $orders = Order::with('material')->get();
        return view('order.order_list', ['orders' => $orders]);
    }

    // Detalhes de um pedido específico
    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('order.order_detail', ['order' => $order]);
    }

    // Criar um novo pedido
    public function create()
    {

        $materials = Material::all();

        return view('order.order_form', compact('materials'));

    }

    public function store(Request $request)
    {

        $data = $request->all();
        // Definindo a data/hora formatada manualmente
        $data['created_at'] = Carbon::now()->format('Y-m-d\TH:i:s');
        $data['updated_at'] = Carbon::now()->format('Y-m-d\TH:i:s');
        
        $order = Order::create($data);
        return redirect()->route('order.show', ['id' => $order->id]);
    }

    // Editar um pedido existente
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        $materials = Material::all();
        return view('order.order_form', compact('order','materials'));
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->update([
            'material_id' => $request->input('material_id'),
            'quantity' => $request->input('quantity'),
            'update_at' => Carbon::now()->format('Y-m-d\TH:i:s'),
            // Outros campos
        ]);
        return redirect()->route('order.index')->with('success', 'Order updated successfully!');
    }

    // Deletar um pedido existente
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('order.index');
    }
}