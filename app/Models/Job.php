<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    static function all(): array
    {
        return [
            ['id' => 1, 'title' => 'Job 1', 'salary' => 20000],
            ['id' => 2, 'title' => 'Job 2', 'salary' => 40000],
            ['id' => 3, 'title' => 'Job 3', 'salary' => 60000],
        ];
    }

    static function find($id)
    {
        $job = Arr::first(static::all(), function ($job) use ($id) {
            return $job['id'] == $id;
        });

        if (! $job) abort(404);

        return $job;
    }
}
