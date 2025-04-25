
<div>
    <details>
        <summary class="cursor-pointer py-2 pl-3 pr-9 text-sm font-semibold lg:w-32 flex lg:inline-flex ">{{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories'}}</summary>
        <div class="py-2 absolute bg-gray-100 w-full mt-2 rounded-xl z-50 " style="max-height: 200px; overflow-y: auto;" >
            @foreach ($categories as $category)
            <a href="/?category={{ $category->slug}}&{{http_build_query(request()->except('category','page')) }}" class="block text-left px-4 py-2 text-gray-800 hover:bg-gray-200">{{ucwords($category->name)}}</a>
            @endforeach
        </div>
    </details>
  </div>