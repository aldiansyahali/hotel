<?php 

namespace App\Models;

use CodeIgniter\Model;

class Kamar extends Model
{
  protected $table    = 'tipe_kamar';
  protected $primaryKey = 'id';
  protected $allowedFields = [
    'tipe',
    'harga',
  ];
}