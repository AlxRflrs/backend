<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarouselItem extends Model
{
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $table = 'carousel_item';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'carousel_item_id';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $fillable = [
    'carousel_name',
    'image_path',
    'description',
    'user_id',
    ];

}