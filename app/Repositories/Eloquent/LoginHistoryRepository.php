<?php
namespace App\Repositories\Eloquent;

use App\Models\LoginHistory;
use App\Repositories\Contracts\LoginHistoryRepositoryInterface;
use Illuminate\Support\Collection;

class LoginHistoryRepository implements LoginHistoryRepositoryInterface {
    public function create(array $data): void {
        LoginHistory::create($data);
    }

   public function getByUserId(int $userId): Collection {
    return LoginHistory::where('user_id', $userId)->latest()->get();
}
}