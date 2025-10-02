<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasUuids;
    protected $table = "permohonan";
    protected $guarded = ['id'];
}
