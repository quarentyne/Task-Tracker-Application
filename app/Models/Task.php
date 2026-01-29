<?php

namespace App\Models;

use App\Models\Scopes\TaskScope;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;

#[ScopedBy([TaskScope::class])]
class Task extends Model
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory;

    protected $guarded = [];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    #[Scope]
    protected function withSearchQuery(Builder $query, string $search): Builder
    {
        return $query->where('title', 'like', "%{$search}%")
                        ->orWhere('description', 'like', "%{$search}%");
    }

    #[Scope]
    protected function withCategory(Builder $query, int $categoryId): Builder
    {
        return $query->where('category_id', $categoryId);
    }

    #[Scope]
    protected function withDateCreatedBetween(Builder $query, string|null $dateFrom, string|null $dateTo): Builder
    {
        $startDate = Carbon::parse($dateFrom ?? '1970-01-01')->startOfDay();
        $endDate = Carbon::parse($dateTo ?? '9999-12-31')->endOfDay();

        return $query->whereBetween('created_at', [$startDate, $endDate]);
    }

    #[Scope]
    protected function withDateCompletedBetween(Builder $query, string|null $dateFrom, string|null $dateTo): Builder
    {
        $startDate = Carbon::parse($dateFrom ?? '1970-01-01')->startOfDay();
        $endDate = Carbon::parse($dateTo ?? '9999-12-31')->endOfDay();

        return $query->whereBetween('completed_at', [$startDate, $endDate]);
    }
}
