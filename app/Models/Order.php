<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = "order";
    public $timestamps = false;

    public function customers()
    {
        return $this->belongsTo(Customers::class, 'customer_name', 'customer_name'); // Opcionalmente, puedes usar withDefault() para establecer valores predeterminados si no se encuentra ninguna relación.
    }

    public function companyName()
    {
        return $this->belongsTo(Customers::class, 'company_name', 'company_name'); // Opcionalmente, puedes usar withDefault() para establecer valores predeterminados si no se encuentra ninguna relación.
    }

    
    public function deliveryAddress()
    {
        return $this->belongsTo(Customers::class, 'delivery_address', 'delivery_address'); // Opcionalmente, puedes usar withDefault() para establecer valores predeterminados si no se encuentra ninguna relación.
    }
}
