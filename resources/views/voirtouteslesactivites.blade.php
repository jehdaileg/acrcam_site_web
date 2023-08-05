@extends('layout_base')


@section('principal_section')







  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Galerie des Images de différentes Activités de ACRCAM</h1>

          </div>




      <div class="flex flex-wrap -m-4">
        @foreach($images_activites as $img)
        <div class="p-4 md:w-1/3">
          <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{ asset($img->image_activite) }}" alt="blog" style="filter: invert(0);">
            <div class="p-6">
              <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">>{{  $img->activite->date_activite }}</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{   $img->activite->nom_activite }}</h1>
              <p class="leading-relaxed mb-3">{{ $img->activite->commentaires_activite }}.</p>
              <div class="flex items-center flex-wrap ">



              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>

      {{ $images_activites->links() }}

    </div>
  </section>





@endsection
