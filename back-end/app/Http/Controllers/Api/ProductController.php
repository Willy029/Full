<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();
        return $products;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $product = new Product();
        $product->n_Empleado = $request->n_Empleado;
        $product->Folio_Pagare_y_Carta_Responsiva = $request->Folio_Pagare_y_Carta_Responsiva;
        $product->Nombre_del_Responsable_del_Equipo = $request->Nombre_del_Responsable_del_Equipo;
        $product->Departamento = $request->Departamento;
        $product->Equipo = $request->Equipo;
        $product->Descripcion = $request->Descripcion;
        $product->Marca = $request->Marca;
        $product->Modelo = $request->Modelo;
        $product->n_Telefono = $request->n_Telefono;
        $product->Contraseña_del_dispositivo_celular = $request->Contraseña_del_dispositivo_celular;
        $product->IMEI = $request->IMEI;
        $product->Nombre_del_Dispositivo = $request->Nombre_del_Dispositivo;
        $product->n_Serie = $request->n_Serie;
        $product->HDD = $request->HDD;
        $product->Contraseña_del_dispositivo = $request->Contraseña_del_dispositivo;
        $product->Precio_a_pagar_en_caso_de_daño_directo = $request->Precio_a_pagar_en_caso_de_daño_directo;
        $product->Fecha_de_Entrega = $request->Fecha_de_Entrega;
        $product->Fecha_de_Devolucion = $request->Fecha_de_Devolucion;
        $product->QR_Code = $request->QR_Code;
        $product->Valor_QR = $request->Valor_QR;

        $product->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        Product::find($id);
        return $product;
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
        //
        $product = Product::findOrFail($request->id);
        $product->n_Empleado = $request->n_Empleado;
        $product->Folio_Pagare_y_Carta_Responsiva = $request->Folio_Pagare_y_Carta_Responsiva;
        $product->Nombre_del_Responsable_del_Equipo = $request->Nombre_del_Responsable_del_Equipo;
        $product->Departamento = $request->Departamento;
        $product->Equipo = $request->Equipo;
        $product->Descripcion = $request->Descripcion;
        $product->Marca = $request->Marca;
        $product->Modelo = $request->Modelo;
        $product->n_Telefono = $request->n_Telefono;
        $product->Contraseña_del_dispositivo_celular = $request->Contraseña_del_dispositivo_celular;
        $product->IMEI = $request->IMEI;
        $product->Nombre_del_Dispositivo = $request->Nombre_del_Dispositivo;
        $product->n_Serie = $request->n_Serie;
        $product->HDD = $request->HDD;
        $product->Contraseña_del_dispositivo = $request->Contraseña_del_dispositivo;
        $product->Precio_a_pagar_en_caso_de_daño_directo = $request->Precio_a_pagar_en_caso_de_daño_directo;
        $product->Fecha_de_Entrega = $request->Fecha_de_Entrega;
        $product->Fecha_de_Devolucion = $request->Fecha_de_Devolucion;
        $product->QR_Code = $request->QR_Code;
        $product->Valor_QR = $request->Valor_QR;

        $product->save();
        return $product;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::destroy($id);
        return $product;
    }
}
