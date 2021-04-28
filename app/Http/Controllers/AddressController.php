<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use \App\Http\Requests\StoreUpdateRequest;
use App\Models\Address;

class AddressController extends Controller
{
    public function index()
    {
        $address = Address::paginate(5);
        return view('index')->with(['address' => $address]);
    }

    public function find(Request $request)
    {
        $cep = substr_replace($request->input('cep'), '-', -3, 0);
        if (Address::where('cep', $cep)->first()) {
            return redirect()->back()->with(['warning' => 'Cep já cadastrado']);
        }

        $response = Http::get("https://viacep.com.br/ws/$cep/json/")->json();
        if (isset($response['erro'])) {
            return redirect()->back()->with(['warning' => 'Cep não localizado']);
        }
        return view('response')->with(['response' => $response]);
    }

    public function store(StoreUpdateRequest $request)
    {
        try {
            Address::create($request->validated());
            return redirect()->route('address.index')->with(['message' => 'Endereço salvo com sucesso']);
        } catch (\Throwable $e) {
            return redirect()->back()->with(['warning' => 'Erro ao salvar no banco']);
        }
    }

    public function show($cep)
    {
        if (!$cep = Address::where('cep', $cep)->get()) {
            return redirect()->back()->with(['warning' => 'Cep não localizado']);
        };
        return view('show')->with(['cep' => $cep]);
    }
}
