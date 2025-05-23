
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
@endpush

<x-layout >

    <header class="max-w-xl mx-auto mt-20 text-center">
        <h1 class="text-4xl">
            Latest <span class="text-blue-500">Laravel From Scratch</span> News
        </h1>


        <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
            <!--  Category -->
            <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl w-40">
              <x-category-dropdown/>
            </div>

            <!-- Search -->
            <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
                <form method="GET" action="/">
                  @if (request('category'))
                    <input type="hidden" name="category" value="{{request('category')}}">
                  @endif
                    <input type="text" 
                        name="search" placeholder="Find something"
                          class="bg-transparent placeholder-black font-semibold text-sm"
                          value="{{request('search')}}">
                </form>
            </div>
        </div>
    </header>

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
      @if ($posts->count())
        <x-posts-grid :posts="$posts"/>
        {{$posts->links()}}
      @else 
        <p class="text-align-center">No posts yet.</p>
      @endif  
  </main>
</x-layout>
  