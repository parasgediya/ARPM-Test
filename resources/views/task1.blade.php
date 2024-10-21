@extends('welcome')
@section('content')
    <div class="grid gap-12 lg:gap-12">
        <div style="overflow: auto"
             class="flex items-start gap-4 rounded-lg bg-white p-6 transition focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 light:ring-zinc-800 dark:focus-visible:ring-[#FF2D20]">
            <div
                class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                <h1 class="text-white">Task 1</h1>
            </div>
            <div class="pt-3 sm:pt-5">
                <h2 class="text-xl font-semibold text-black">Cumulative Sums</h2>
                <figure>
                            <pre style="margin: 0 !important;">
                            <code>
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
                            </code>
                            </pre>
                </figure>
                <h2><strong>Output: </strong></h2>
                <table border="1" style="border: 1px solid">
                    @foreach ($cumulativeSum as $weekData)
                        <tr style="border: 1px solid">
                            @foreach ($weekData as $sum)
                                <td style="border: 1px solid">{{ $sum }}</td>
                            @endforeach
                        </tr>
                    @endforeach
                </table>

                <h1 style="margin: 10px; width: 50%; padding: 10px;background-color: #ff2d2099">
                    <strong>NOTE: </strong>
                    Unfortunately, I'm not familiar with how to use this data in Google Sheets to generate a chart. It
                    would require some research and
                    development, which might take time, and I may not be able to complete it within the given
                    timeframe.</h1>
            </div>
        </div>
    </div>
@endsection
