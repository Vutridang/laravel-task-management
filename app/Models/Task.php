<?php

namespace App\Models;

use App\Enum\StatusEnum;
use App\Enum\PriorityEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;


class Task extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = [
        'status' => StatusEnum::class,
        'priority' => PriorityEnum::class,
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class, 'created_by');
    }
}
