<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessageBarcode extends Model
{
    protected $table = "message_barcodes";

    protected $fillable = ['body'];
}
