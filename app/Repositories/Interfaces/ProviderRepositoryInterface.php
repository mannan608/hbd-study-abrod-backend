<?php

namespace App\Repositories\Interfaces;

use App\Models\Provider;

interface ProviderRepositoryInterface
{
    public function paginate(int $perPage = 15);

    public function universities();
    public function campuses();

    public function findById(int $id): Provider;

    public function create(array $data): Provider;

    public function update(Provider $provider, array $data): Provider;

    public function delete(Provider $provider): bool;
}