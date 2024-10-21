<?php

namespace App\Http\Controllers;

use App\Helper\GoogleSheetsService;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function generateTable()
    {
        $data = [];
        for ($i = 0; $i < 10; $i++) {
            $data[] = array_map(function () {
                return mt_rand(0, 100) / 100;
            }, range(1, 52));
        }

        $cumulativeSum = [];
        foreach ($data as $row) {
            $cumulative = 0;
            $cumulativeRow = [];
            foreach ($row as $value) {
                $cumulative += $value;
                $cumulativeRow[] = $cumulative;
            }
            $cumulativeSum[] = $cumulativeRow;
        }

        return view('task1', ['cumulativeSum' => $cumulativeSum]);
    }

    public function index()
    {
        return view('optimized');
    }

    public function optimized()
    {
        return view('task2');
    }

    public function testing()
    {
        return view('task3');
    }

    public function dataSample()
    {
        $employees = collect([
            ['name' => 'John', 'city' => 'Dallas'],
            ['name' => 'Jane', 'city' => 'Austin'],
            ['name' => 'Jake', 'city' => 'Dallas'],
            ['name' => 'Jill', 'city' => 'Dallas'],
        ]);

        $offices = collect([
            ['office' => 'Dallas HQ', 'city' => 'Dallas'],
            ['office' => 'Dallas South', 'city' => 'Dallas'],
            ['office' => 'Austin Branch', 'city' => 'Austin'],
        ]);

        // Employees by city
        $groupEmployees = collect($employees)
            ->groupBy('city')
            ->map(function ($employees) {
                return $employees->pluck('name')->all();
            });

        // Output array using offices and grouped employees
        $output = collect($offices)
            ->groupBy('city')
            ->map(function ($offices, $city) use ($groupEmployees) {
                return $offices->mapWithKeys(function ($office) use ($groupEmployees, $city) {
                    return [$office['office'] => $groupEmployees[$city] ?? []];
                });
            })->toArray();

        return view('task4', ['output' => $output]);
    }

    public function qa()
    {
        return view('task5');
    }
}
