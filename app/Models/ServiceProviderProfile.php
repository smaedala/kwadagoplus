<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceProviderProfile extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'bio',
        'service_areas',
        'rating',
        'total_reviews',
        'completed_jobs',
        'is_verified',
        'is_available',
        'working_hours',
        'skills',
        'business_name',
        'business_registration_number',
        'hourly_rate',
    ];

    protected $casts = [
        'service_areas' => 'array',
        'working_hours' => 'array',
        'skills' => 'array',
        'rating' => 'decimal:2',
        'hourly_rate' => 'decimal:2',
        'is_verified' => 'boolean',
        'is_available' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function services()
    {
        return $this->hasMany(ProviderService::class, 'provider_id');
    }

    public function verificationDocuments()
    {
        return $this->hasMany(VerificationDocument::class, 'user_id', 'user_id');
    }
}
