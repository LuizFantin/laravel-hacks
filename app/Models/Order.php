<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['status', 'paid', 'track_code'];

    public function scopeStatus($query,$status){
        return $query->where('status',$status);
    }

    public function scopePaid($query,$paid){
        return $query->where('paid',$paid);
    }

    public function getFormattedStatusAttribute(){
        return $this->status == 'pending' ? 'Envio pendente' : 'Enviado';
    }

    public function getFormattedPaidAttribute(){
        return $this->paid ? 'Pago' : 'Aguardando pagamento';
    }

    public function setTrackCodeAttribute($value){
        $this->attributes['track_code'] = "#{$value}";
    }
}
