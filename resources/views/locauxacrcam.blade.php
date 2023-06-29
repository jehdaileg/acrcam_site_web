@extends('layout_base')


@section('principal_section')





  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap w-full mb-20">
        <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
          <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Visiter nos locaux</h1>
          <div class="h-1 w-20 bg-indigo-500 rounded"></div>
        </div>

      </div>
      <div class="flex flex-wrap -m-4">
        <div class="xl:w-1/4 md:w-1/2 p-4 px-4  py-4">
          <div class="bg-gray-100 p-6 rounded-lg">
            <img class=" rounded w-full h-40 object-cover object-center mb-6 px-4 py-5" src="{{ asset('locaux_acrcam/loc.png') }}" alt="content" style="filter: invert(0);">
            <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">BUREAU DE COORDINATION</h3>

          </div>
        </div>
        <div class="xl:w-1/4 md:w-1/2 p-4">
            <div class="bg-gray-100 p-6 rounded-lg">
              <img class="h-40 rounded w-full object-cover object-center mb-6" src="{{ asset('locaux_acrcam/bureau_coordination.png') }}" alt="content" style="filter: invert(0);">
              <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">BUREAUX DE ACRCAM</h3>

            </div>
          </div>
          <div class="xl:w-1/4 md:w-1/2 p-4">
            <div class="bg-gray-100 p-6 rounded-lg">
              <img class="h-40 rounded w-full object-cover object-center mb-6" src="{{ asset('locaux_acrcam/salle_attente.png') }}" alt="content" style="filter: invert(0);">
              <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">SALLE D'ATTENTE</h3>

            </div>
          </div>
          <div class="xl:w-1/4 md:w-1/2 p-4">
            <div class="bg-gray-100 p-6 rounded-lg">
              <img class="h-40 rounded w-full object-cover object-center mb-6" src="{{ asset('locaux_acrcam/salle_formation.png') }}" alt="content" style="filter: invert(0);">
              <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">SALLE DE FORMATION</h3>

            </div>
          </div>

          <div class="xl:w-1/4 md:w-1/2 p-4">
            <div class="bg-gray-100 p-6 rounded-lg">
              <img class="h-40 rounded w-full object-cover object-center mb-6" src="{{ asset('locaux_acrcam/salle_form_2.png') }}" alt="content" style="filter: invert(0);">
              <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">SALLE DE FORMATION</h3>

            </div>
          </div>

          <div class="xl:w-1/4 md:w-1/2 p-4">
            <div class="bg-gray-100 p-6 rounded-lg">
              <img class="h-40 rounded w-full object-cover object-center mb-6" src="{{ asset('locaux_acrcam/materiels_1.png') }}" alt="content" style="filter: invert(0);">
              <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">MATERIELS</h3>

            </div>
          </div>

          <div class="xl:w-1/4 md:w-1/2 p-4">
            <div class="bg-gray-100 p-6 rounded-lg">
              <img class="h-40 rounded w-full object-cover object-center mb-6" src="{{ asset('locaux_acrcam/materiels_2.png') }}" alt="content" style="filter: invert(0);">
              <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">MATERIELS</h3>

            </div>
          </div>
      </div>
    </div>
  </section>



@endsection
