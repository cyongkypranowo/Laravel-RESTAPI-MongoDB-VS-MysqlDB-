<?php
/**
 * @Author: C Yongky Pranowo
 * @Date:   2019-11-24 19:12:23
 * @Last Modified by:   C Yongky Pranowo
 * @Last Modified time: 2019-11-24 19:20:18
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MstStation extends Model
{
    protected $table = 'mst_station';
    protected $fillable = ['station_name','station_abbreviation'];
}
