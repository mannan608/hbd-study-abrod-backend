<?php

namespace App\Repositories\Eloquent;

use App\Models\Provider;
use App\Repositories\Interfaces\ProviderRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProviderRepository implements ProviderRepositoryInterface
{
    public function paginate(int $perPage = 15): LengthAwarePaginator
    {
        return Provider::query()
            ->with('user')
            ->latest()
            ->paginate($perPage);
    }

    public function findById(int $id): Provider
    {
        return Provider::query()
            ->with('user')
            ->findOrFail($id);
    }

    public function create(array $data): Provider
    {
        return DB::transaction(function () use ($data) {
            return Provider::create($data);
        });
    }

  public function update(Provider $provider, array $data): Provider
{
    return DB::transaction(function () use ($provider, $data) {

        $provider->user->update([
            'name' => $data['name'],
            'email' => $data['email'],
        ]);

        if (!empty($data['password'])) {
            $provider->user->update([
                'password' => Hash::make($data['password']),
            ]);
        }

        $provider->update([
            'short_name' => $data['short_name'] ?? null,
            'phone' => $data['phone'] ?? null,
            'country' => $data['country'] ?? null,
            'state' => $data['state'] ?? null,
            'city' => $data['city'] ?? null,
            'address' => $data['address'] ?? null,
        ]);

        return $provider->fresh('user');
    });
}

    public function delete(Provider $provider): bool
    {
        return $provider->delete();
    }
}