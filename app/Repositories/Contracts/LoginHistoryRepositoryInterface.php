<?php

namespace App\Repositories\Contracts;
use Illuminate\Support\Collection;
interface LoginHistoryRepositoryInterface
{
    /**
     * Create a new class instance.
     */
    
    public function create(array $data): void;
    public function getByUserId(int $userId): Collection;
}
