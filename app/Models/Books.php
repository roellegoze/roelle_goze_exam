<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $table = 'books';

	protected $fillable = [
		'library_id',
        'name',
        'is_reserved',
        'reserved_by'
	];

    public function library()
    {
        return $this->belongsTo(Library::class);
    }

    public function user()
	{
		return $this->belongsTo(User::class, 'reserved_by', 'id');
	}


}
