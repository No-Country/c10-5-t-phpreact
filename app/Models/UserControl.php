<?php

namespace App\Models;

use App\Models\User;
use App\Models\WeekResults;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserControl extends Model
{
    use HasFactory;

    protected $table = 'user_controls';

    protected $fillable = [
        'date',
        'attendance',
        'justification',
        'user_id',
        'week_result_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function weekResult(): BelongsTo
    {
        return $this->belongsTo(WeekResults::class);
    }
}
