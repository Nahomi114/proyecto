<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProveedorController extends Controller
{
   
   public function index()
   {
       $proveedores = Proveedor::all();
       return response()->json($proveedores);
   }

   
   public function store(Request $request)
   {
       $validatedData = $request->validate([
           'Nom_proveedores' => 'required|string|max:30',
           'RUC_proveedores' => 'required|string|max:10',
           'Telf_proveedores' => 'required|string|max:9',
           'Correo_proveedores' => 'required|string|email|max:30',
       ]);

       $proveedor = Proveedor::create($validatedData);

       return response()->json($proveedor, 201);
   }

   
   public function show($id)
   {
       $proveedor = Proveedor::findOrFail($id);
       return response()->json($proveedor);
   }

   
   public function update(Request $request, $id)
   {
       $validatedData = $request->validate([
           'Nom_proveedores' => 'sometimes|required|string|max:30',
           'RUC_proveedores' => 'sometimes|required|string|max:10',
           'Telf_proveedores' => 'sometimes|required|string|max:9',
           'Correo_proveedores' => 'sometimes|required|string|email|max:30',
       ]);

       $proveedor = Proveedor::findOrFail($id);
       $proveedor->update($validatedData);

       return response()->json($proveedor);
   }

  
   public function destroy($id)
   {
       $proveedor = Proveedor::findOrFail($id);
       $proveedor->delete();

       return response()->json(null, 204);
   }
}
