@extends('welcome')
@section('content')
    <div class="grid gap-12 lg:gap-12">
        <div
            class="flex items-start gap-4 rounded-lg bg-white p-6 transition focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 light:ring-zinc-800 dark:focus-visible:ring-[#FF2D20]">
            <div
                class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                <h1 class="text-white">Task 4</h1>
            </div>
            <div class="pt-3 sm:pt-5">
                <h2 class="text-xl font-semibold text-black">Collections</h2>
                <p>Answer</p>
                <figure>
                            <pre style="margin: 0 !important;">
<code>
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

    dd($output);
</code>
                            </pre>
                </figure>
                <br/>
                <hr/>
                <h1><strong>Output</strong></h1>
                <pre>
                    {{print_r($output)}}
                </pre>
            </div>
        </div>
    </div>
@endsection
