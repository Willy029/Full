<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Imports\ProductsImport;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'n_Empleado',
        'Folio_Pagare_y_Carta_Responsiva',
        'Nombre_del_Responsable_del_Equipo',
        'Departamento',
        'Equipo',
        'Descripcion',
        'Marca',
        'Modelo',
        'n_Telefono',
        'Contraseña_del_dispositivo_celular',
        'IMEI',
        'Nombre_del_Dispositivo',
        'n_Serie',
        'HDD',
        'SSD',
        'Contraseña_del_dispositivo',
        'Precio_a_pagar_en_caso_de_daño_directo',
        'Fecha_de_Entrega',
        'Fecha_de_Devolucion',
        'QR_Code',
        'Valor_QR'
    ];
}
