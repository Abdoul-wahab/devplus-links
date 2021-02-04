<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Link extends Model
{
    use HasFactory;
    public const NUM_ITEMS_PER_PAGE = 12;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'link',
        'description',
        'link_key'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
