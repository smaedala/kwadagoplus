<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserProfile extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'full_name',
        'phone_number',
        'address',
        'latitude',
        'longitude',
        'profile_photo',
        'preferred_language',
        'phone_verified',
        'email_verified',
        'address_verified',
        'user_type',
        'notification_preferences',
    ];

    protected $casts = [
        'latitude' => 'decimal:8',
        'longitude' => 'decimal:8',
        'phone_verified' => 'boolean',
        'email_verified' => 'boolean',
        'address_verified' => 'boolean',
        'notification_preferences' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
