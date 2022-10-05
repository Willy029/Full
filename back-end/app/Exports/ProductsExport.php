<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PrestamoExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Product::select(
            "n_Empleado",
            "Folio_Pagare_y_Carta_Responsiva",
            "Nombre_del_Responsable_del_Equipo",
            "Departamento",
            "Equipo",
            "Descripcion",
            "Marca",
            "Modelo",
            "n_Telefono",
            "Contraseña_del_dispositivo_celular",
            "IMEI",
            "Nombre_del_Dispositivo",
            "n_Serie",
            "HDD",
            "SSD",
            "Contraseña_del_dispositivo",
            "Precio_a_pagar_en_caso_de_daño_directo",
            "Fecha_de_Entrega",
            "Fecha_de_Devolucion",
            "QR_Code",
            "Valor_QR"
        )->get();
    }

    public function headings():array
    {
        return[
            "n_Empleado",
            "Folio_Pagare_y_Carta_Responsiva",
            "Nombre_del_Responsable_del_Equipo",
            "Departamento",
            "Equipo",
            "Descripcion",
            "Marca",
            "Modelo",
            "n.° Telefono",
            "Contraseña_del_dispositivo_celular",
            "IMEI",
            "Nombre_del_Dispositivo",
            "n.° Serie",
            "HDD",
            "SSD",
            "Contraseña_del_dispositivo",
            "Precio_a_pagar_en_caso_de_daño_directo",
            "Fecha_de_Entrega",
            "Fecha_de_Devolucion",
            "QR_Code",
            "Valor_QR"];
    }
}
