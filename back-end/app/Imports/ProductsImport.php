<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Hash;

class ProductsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            //
            'n_Empleado' => $row['n_Empleado'],
            'Folio_Pagare_y_Carta_Responsiva' => $row['Folio_Pagare_y_Carta_Responsiva'],
            'Nombre_del_Responsable_del_Equipo' => $row['Nombre_del_Responsable_del_Equipo'],
            'Departamento' => $row['Departamento'],
            'Equipo' => $row['Equipo'],
            'Descripcion' => $row['Descripcion'],
            'Marca' => $row['Marca'],
            'Modelo' => $row['Modelo'],
            'n_Telefono' => $row['n_Telefono'],
            'Contraseña_del_dispositivo_celular' => $row['Contraseña_del_dispositivo_celular'],
            'IMEI' => $row['IMEI'],
            'Nombre_del_Dispositivo' => $row['Nombre_del_Dispositivo'],
            'n_Serie' => $row['n_Serie'],
            'HDD' => $row['HDD'],
            'SSD' => $row['SSD'],
            'Contraseña_del_dispositivo' => $row['Contraseña_del_dispositivo'],
            'Precio_a_pagar_en_caso_de_daño_directo' => $row['Precio_a_pagar_en_caso_de_daño_directo'],
            'Fecha_de_Entrega' => $row['Fecha_de_Entrega'],
            'Fecha_de_Devolucion' => $row['Fecha_de_Devolucion'],
            'QR_Code' => $row['QR_Code'],
            'Valor_QR' => $row['Valor_QR'],
        ]);
    }
}
