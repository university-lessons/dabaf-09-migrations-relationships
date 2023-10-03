<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Company extends Model
{
    use HasFactory;

    public function contactInfo(): HasOne
    {
        return $this->hasOne(ContactInfo::class);
    }

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }
}
