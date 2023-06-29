@extends('dashboard')


@section('main_content_admin_part')

    <h5 class="text-gray-800 text-xl font-bold mb-4">Tableau de Bord</h5>

<div class=" flex-wrap inline-flex content-center ml-3">




<div class="max-w-sm p-1 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <span class="px-3 py-3">

    </span>

    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
          <path d="M8 17l4 4 4-4m-4-5v9"></path>
          <path d="M20.88 18.09A5 5 0 0018 9h-1.26A8 8 0 103 16.29"></path>
        </svg>
        <h2 class="title-font font-medium text-3xl text-gray-900">{{ $projets->count() }}</h2>
        <p class="leading-relaxed">projets</p>
      </div>

</div>

<div class="max-w-sm p-1 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <span class="px-3 py-3">

    </span>

    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
          </svg>
        <h2 class="title-font font-medium text-3xl text-gray-900">{{ $contacts->count() }}</h2>
        <p class="leading-relaxed">contacts</p>
      </div>

</div>



<div class="max-w-sm p-1 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <span class="px-3 py-3">

    </span>

    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
          </svg>
        <h2 class="title-font font-medium text-3xl text-gray-900">{{ $partenaires->count() }}</h2>
        <p class="leading-relaxed">partenaires</p>
      </div>

</div>



<div class="max-w-sm p-1 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <span class="px-3 py-3">

    </span>

    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
          </svg>
        <h2 class="title-font font-medium text-3xl text-gray-900">{{ $donateurs->count() }}</h2>
        <p class="leading-relaxed">donateurs</p>
      </div>

</div>

<div class="max-w-sm p-1 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <span class="px-3 py-3">

    </span>

    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
          <path d="M8 17l4 4 4-4m-4-5v9"></path>
          <path d="M20.88 18.09A5 5 0 0018 9h-1.26A8 8 0 103 16.29"></path>
        </svg>
        <h2 class="title-font font-medium text-3xl text-gray-900">{{ $images->count() }}</h2>
        <p class="leading-relaxed">images</p>
      </div>

</div>





<div class="max-w-sm p-1 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <span class="px-3 py-3">

    </span>

    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
          <path d="M8 17l4 4 4-4m-4-5v9"></path>
          <path d="M20.88 18.09A5 5 0 0018 9h-1.26A8 8 0 103 16.29"></path>
        </svg>
        <h2 class="title-font font-medium text-3xl text-gray-900">{{ $projets->count() }}</h2>
        <p class="leading-relaxed">Projets</p>
      </div>

</div>



</div>



@endsection
