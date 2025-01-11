<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananBukti extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pesanan',
        'filename',
        'storage_disk_file',
        'storage_folder_file',
        'storage_path_file',
    ];
}
