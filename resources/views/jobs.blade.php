<x-layout>

    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <ul>
    @foreach($jobs as $job)
        <li>
            <a href="/jobs/{{ $job['id'] }}" class="text-blue-600 hover:underline">
                <strong>{{ $job['title'] }}</strong>. Salary per year: {{ $job['salary'] }}</li>
            </a>
        </li>
    @endforeach
    </ul>
</x-layout>
