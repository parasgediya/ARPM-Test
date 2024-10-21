@extends('welcome')
@section('content')
    <div class="grid gap-12 lg:gap-12">
        <div
            class="flex items-start gap-4 rounded-lg bg-white p-6 transition focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 light:ring-zinc-800 dark:focus-visible:ring-[#FF2D20]">
            <div
                class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                <h1 class="text-white">Task 5</h1>
            </div>
            <div class="pt-3 sm:pt-5">
                <h2 class="text-xl font-semibold text-black">Q&A</h2>
                <h3 class="text-black">A) Explain this code:</h3>
                <p class="mt-4 text-sm/relaxed">
                    {{highlight_string("Schedule::command('app:example-command')
->withoutOverlapping()
->hourly()
->onOneServer()
->runInBackground();")}}
                </p>
                <ol>
                    <li>
                        <code>Schedule::command('app:example-command')</code> This schedules a custom
                        Artisan command
                        (app:example-command) to be run by Laravel's scheduler. This commands is defined in
                        the app/Console/Commands directory.
                    </li>
                    <li>
                        <code>->withoutOverlapping()</code> This ensures that the command won't run again if
                        the previous instance is still running. this option prevents overlapping executions,
                        ensuring only one instance runs at a time.
                    </li>
                    <li>
                        <code>->hourly()</code> It specifies that the command should be executed every hour.
                    </li>
                    <li>
                        <code>->onOneServer()</code> this ensures the command only runs on one server
                        instead of being triggered on all servers at once.
                    </li>
                    <li>
                        <code>->runInBackground()</code> This runs the command in the background so that it
                        doesn’t block the scheduler. The scheduler can continue with other tasks while this
                        command is running in parallel.
                    </li>
                </ol>
                <br/>
                <hr/>
                <br/>
                <h3 class="text-black">B) Context vs Cache Facades:</h3>
                <p>
                    <strong>Context:</strong> It's stores contextual data, often tied to the application's
                    current state.
                </p>
                <p>
                    <strong>Cache:</strong> Provides caching functionalities (like storing frequently
                    accessed data).
                </p>
                <blockquote>
                    <strong>Example:</strong>
                    <code>
                        Cache::put('key', 'value', $seconds);
                    </code>
                </blockquote>

                <br/>
                <hr/>
                <br/>
                <h3 class="text-black">C) Differences Between Update Methods:</h3>
                <p><strong>$query->update():</strong> Updates records directly via a query, no model events
                    triggered.</p>
                <p><strong>$model->update():</strong> Updates a single record and triggers model events.</p>
                <p><strong>$model->updateQuietly():</strong> Updates a model without triggering events
                    (useful for bulk updates).</p>
            </div>
        </div>
    </div>
@endsection

