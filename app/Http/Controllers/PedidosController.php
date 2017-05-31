<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pedido;

use Illuminate\Support\Facades\Auth;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   



    public function index()
    {
        // $pedidos = Pedido::all();
        // return view("ppap.pedidos.index", ['pedidos' => $pedidos]);

        $search = \Request::get('search');
        $pedidos = Pedido::where('idpedidos', 'like', '%' .$search. '%')->orderBy('idpedidos')->paginate(3);
        return view("ppap.pedidos.index", ['pedidos' => $pedidos]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pedidos = new Pedido;
        return view("ppap.pedidos.create", ["pedidos" => $pedidos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pedidos = new Pedido;

        $pedidos->customer_group = $request->customer_group;
        $pedidos->customer = $request->customer;
        $pedidos->contact_name = $request->contact_name;
        $pedidos->lf_coordinator = $request->lf_coordinator;
        $pedidos->customer_part_number = $request->customer;
        $pedidos->lf_part_number = $request->lf_part_number;
        $pedidos->group = $request->group;
        $pedidos->note_oem_part_number = $request->note_oem_part_number;
        $pedidos->level_request = $request->level_request;
        $pedidos->type_of_request = $request->type_of_request;
        $pedidos->etr = $request->etr;
        $pedidos->date_request = $request->date_request;
        $pedidos->customer_due_date = $request->customer_due_date;
        $pedidos->lf_due_date = $request->lf_due_date;
        $pedidos->submited_date = $request->submited_date;
        $pedidos->full_interim_submission = $request->full_interim_submission;
        $pedidos->day_submitted = $request->day_submitted;
        $pedidos->why_open = $request->why_open;
        $pedidos->pass_due_vs_lf_due_date = $request->pass_due_vs_lf_due_date;
        $pedidos->time_to_response = $request->time_to_response;
        $pedidos->comments = $request->comments;
        $pedidos->approval_date = $request->approval_date;
        $pedidos->type_of_no_conformity = $request->type_of_no_conformity;
        $pedidos->no_conformidad_de_submision_de_ppaps = $request->no_conformidad_de_submision_de_ppaps;
        $pedidos->imds_submission = $request->imds_submission;
        

        if ($pedidos->save()) {
            return redirect('ppap/pedidos');
        }
        else{
            return view('ppap/pedidos/create', ["pedidos" => $pedidos]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pedidos = Pedido::find($id);
        return view ("ppap.pedidos.edit", ["pedidos" => $pedidos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pedidos = Pedido::find($id);

        $pedidos->customer_group = $request->customer_group;

        if ($pedidos->save()) {
            return redirect('/ppap/pedidos');
        }
        else{
            return view('/ppap.pedidos.edit', ["pedidos" => $pedidos]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idpedidos)
    {
        Pedido::destroy($idpedidos);

        return redirect('ppap/pedidos');
    }
}
