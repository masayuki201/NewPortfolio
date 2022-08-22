<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'url',
        'target_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\Models\User');
    }

    public function target(): BelongsTo
    {
        return $this->belongsTo('App\Models\Target');
    }

    public function likes(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\User', 'likes')->withTimestamps();
    }

    //ログインユーザーがこの動画をいいね済みかどうかを返すメソッド
    public function isLikedBy(?User $user): bool
    {
        return $user ? (bool)$this->likes->where('id', $user->id)->count() : false;
    }

    //現在のいいね数を算出するメソッド
    public function getCountLikesAttribute(): int
    {
        return $this->likes->count();
    }

    public $timestamps = false;
}
