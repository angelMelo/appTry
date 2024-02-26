<?php

namespace App\Models;

use App\Services\FirebaseService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['cfdi', 'cfdis', 'efecto', 'fechaexp', 'fechasat', 'foliofiscal', 'pac', 'rfce', 'rfcr', 'rsocial', 'rsocialr', 'status'];
}