<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\OrderItem;
use App\Models\Payment;


class Order extends Model
{
    use HasFactory;



    protected $fillable = [
        'user_id',
        'payment_id',
        'status',
        'pickup_delivery_date_time',
        'total_amount'
    ];

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
 

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function orderItems(){
        return $this->hasMany(OrderItem::class);
    }

    public static function getPossibleStatusValues()
    {
        $column = 'status';
        $table = (new static)->getTable();
        $connection = (new static)->getConnection();
        $values = $connection->select(
            "SHOW COLUMNS FROM {$table} WHERE Field = '{$column}'"
        )[0]->Type;
        preg_match('/^enum\((.*)\)$/', $values, $matches);
        $enumValues = [];
        foreach (explode(',', $matches[1]) as $value) {
            $enumValues[] = trim($value, "'");
        }
        return $enumValues;
    }

}

