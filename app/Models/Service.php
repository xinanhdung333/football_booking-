<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $fillable = ['name','description','price','image'];

    public function scopeWithRatings($query)
    {
        return $query->select('services.*')
            ->leftJoin('feedback as fe', 'fe.service_id', '=', 'services.id')
            ->where('services.status', 'active')
            ->groupBy('services.id')
            ->selectRaw('COALESCE(AVG(fe.rating), 0) as avg_rating')
            ->selectRaw('COALESCE(COUNT(fe.id), 0) as total_reviews')
            ->orderBy('services.name', 'asc');
    }
}
