@extends('welcome')
@section('content')
    <div class="grid gap-12 lg:gap-12">
        <div
            class="flex items-start gap-4 rounded-lg bg-white p-6 transition focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 light:ring-zinc-800 dark:focus-visible:ring-[#FF2D20]">
            <div
                class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                <h1 class="text-white">Task 3</h1>
            </div>
            <div class="pt-3 sm:pt-5">
                <h2 class="text-xl font-semibold text-black">Testing</h2>
                <p>Here's how you can write a PHPUnit test for <code>SpreadsheetService::processSpreadsheet()</code>:
                </p>
                <figure>
                            <pre style="margin: 0 !important;">
<code>
$orders = Order::with(['customer', 'items.product', 'cartItems'])->get();
$orderData = $orders->map(function ($order) {
    $totalAmount = $order->items->sum(function ($item) {
        return $item->price * $item->quantity;
    });

    $itemsCount = $order->items->count();
    $lastAddedToCart = $order->cartItems->sortByDesc('created_at')->first()->created_at ?? null;
    $completedOrderExists = $order->status === 'completed';

    return [
        'order_id' => $order->id,
        'customer_name' => $order->customer->name,
        'total_amount' => $totalAmount,
        'items_count' => $itemsCount,
        'last_added_to_cart' => $lastAddedToCart,
        'completed_order_exists' => $completedOrderExists,
        'created_at' => $order->created_at,
    ];
});

$sortedOrderData = $orderData->sortByDesc(function ($order) {
    return $order['completed_order_exists'] ? $order['created_at'] : null;
});
                                   </code>
                                </pre>
                </figure>
                <h2><strong>Explanation:</strong></h2>
                <ul>
                    <li> I use with() to load related models (customer, items, and product) to avoid the N+1 query
                        problem.
                    </li>
                    <li> Instead of using foreach, the data is processed using collection methods (map() for
                        transformation, sum() for total amounts).
                    </li>
                    <li> The sorting is done via Laravel collections' sortByDesc() for better readability and
                        performance.
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
