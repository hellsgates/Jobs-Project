<x-layout>

    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class="font-bold text-lg"> {{ $job->title }}</h2>
    <p>
        This job pays {{ $job->salary }} per year.
    </p>

            <x-button class="mt-6" href="/jobs/{{ $job->id }}/edit">
                Edit Job
            </x-button>

</x-layout>
