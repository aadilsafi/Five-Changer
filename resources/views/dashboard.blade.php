<x-app-layout>

    @section('styles')
        <style>
            video::-webkit-media-controls-timeline {
                display: none;
            }
        </style>
    @endsection

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @auth
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-5">
                    <div class="p-6 text-gray-900 font-bold text-center">
                        <p>
                            Last Draw Numbers
                        </p>
                        <p class="text-2xl">
                            {{ $last_draw?->numbers }}
                        </p>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-5">
                    <div class="p-6 text-gray-900 font-bold text-2xl">
                        <marquee>
                            !! NEW LOTTERY IS HERE !!
                        </marquee>
                    </div>
                </div>
                @if ($videos)
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                        @foreach ($videos as $item)
                            <div class="bg-white rounded-lg overflow-hidden shadow-md video-container">
                                <video class="w-full aspect-video video" preload="auto" controls muted playsinline>
                                    <source src="{{ asset('storage/' . $item->url) }}" type="video/mp4" />
                                    Your browser does not support the video tag.
                                </video>
                                <div class="p-4">
                                    <h2 class="text-lg font-semibold">{{ $item->title }}</h2>
                                    <p class="text-gray-600">{{ $item->description }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            @endauth
        </div>
    </div>

    <div id="myModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 hidden justify-center items-center">
        <div class="bg-white rounded-lg shadow-lg w-11/12 md:w-1/2 lg:w-1/3 p-6">
            <h2 class="text-2xl font-bold mb-4">Enter Number</h2>
            <!-- Form inside the modal -->
            <form action="{{ route('lottery-ticket.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="number">Number</label>
                    <input id="number" type="number" placeholder="Enter number" name="lottery_number" min="1"
                        max="55" step="1"
                        class="w-full px-3 py-2 border rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                </div>
                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">
                        Submit
                    </button>
                    <button type="button" id="closeModalBtn"
                        class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                        Close
                    </button>
                </div>
            </form>
        </div>
    </div>

    @section('scripts')
        <script>
            const modal = document.getElementById('myModal');
            const closeModalBtn = document.getElementById('closeModalBtn');

            const videos = document.querySelectorAll('.video');

            videos.forEach(video => {
                video.addEventListener('play', () => {
                    const this_video = video;
                    videos.forEach(otherVideo => {
                        if (otherVideo !== this_video && !otherVideo.paused) {
                            otherVideo.pause();
                        }
                    });
                });
            });

            videos.forEach(video => {
                video.addEventListener('ended', showModal);
            });

            function showModal() {
                modal.classList.remove('hidden');
                modal.classList.add('flex');
            }

            closeModalBtn.addEventListener('click', () => {
                modal.classList.remove('flex');
                modal.classList.add('hidden');
            });

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.classList.remove('flex');
                    modal.classList.add('hidden');
                }
            }
        </script>
    @endsection
</x-app-layout>
