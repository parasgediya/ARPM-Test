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
public function test_process_spreadsheet_success()
{
    // Mocking the importer
    $importer = $this->mock('importer');
    $importer->shouldReceive('import')->andReturn([
        ['product_code' => 'ABC123', 'quantity' => 10],
        ['product_code' => 'XYZ456', 'quantity' => 5],
    ]);

    // Mocking the Product creation
    Product::shouldReceive('create')->twice()->andReturnUsing(function($data) {
        return new Product($data);
    });

    // Mock the queue
    Queue::fake();

    // Run the service method
    $service = new SpreadsheetService();
    $service->processSpreadsheet('fake/path/to/file.xlsx');

    // Assert that ProcessProductImage job was dispatched twice
    Queue::assertPushed(ProcessProductImage::class, 2);
}

public function test_process_spreadsheet_validation_fails()
{
    // Mocking the importer
    $importer = $this->mock('importer');
    $importer->shouldReceive('import')->andReturn([
        ['product_code' => '', 'quantity' => 0],  // Invalid data
    ]);

    // Ensure Product::create() is never called
    Product::shouldReceive('create')->never();

    // Run the service method
    $service = new SpreadsheetService();
    $service->processSpreadsheet('fake/path/to/file.xlsx');
}                                    </code>
                            </pre>
                </figure>
                <h2><strong>Explanation:</strong></h2>
                <p>We create two test methods:</p>
                <ul>
                    <li><code>test_process_spreadsheet_success()</code> This test simulates the scenario where the
                        spreadsheet has valid data, and products are created and jobs are dispatched.
                    </li>
                    <li><code>test_process_spreadsheet_validation_fails()</code> This test simulates invalid data (e.g.,
                        invalid product code, quantity, or duplicate entries) and ensures that no products are created
                        and no jobs are dispatched.
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
