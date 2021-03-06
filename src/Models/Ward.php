<?php

namespace NguyenManh1997\LaravelVietNamDatabase\Models;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    protected $table = 'wards';
    protected $fillable = [
    	'ward_id',
		'name',
		'type',
		'location',
		'district_id'
    ];
}
