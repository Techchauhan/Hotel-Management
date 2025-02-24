<!-- resources/views/components/subscription-plan.blade.php -->
@props(['title', 'description', 'price', 'features'])

<div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
    <div class="px-6 py-4 text-center">
        <h2 class="text-xl font-semibold text-gray-700">{{ $title }}</h2>
        <p class="text-gray-500 text-sm mt-2">{{ $description }}</p>

        <div class="mt-4">
            <span class="text-3xl font-bold text-blue-500"> ₹{{ $price }}<span class="text-base text-gray-400">/month</span></span>
        </div>

        <ul class="my-4 space-y-2 text-left text-sm text-gray-600">
            @foreach ($features as $feature)
                <li class="flex items-center">
                    <svg class="w-4 h-4 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    {{ $feature }}
                </li>
            @endforeach
        </ul>

        <a href="#" class="bg-blue-500 text-white py-2 px-6 rounded-lg hover:bg-blue-600 transition">Choose Plan</a>
    </div>
</div>
