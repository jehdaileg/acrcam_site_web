
@extends('dashboard')


@section('main_content_admin_part')


<div class="container my-24 mx-auto md:px-6">
    <!-- Section: Design Block -->
    <section class="mb-32">
      <div class="flex flex-wrap">
        <div class="w-full shrink-0 grow-0 basis-auto md:w-2/12 lg:w-3/12">

            @foreach($activite->imagesactivites as $img )
            <div>


                <img src="{{ asset($img->image_activite) }}" alt="" />
            </div>

            @endforeach

        </div>

        <div class="w-full shrink-0 grow-0 basis-auto text-center md:w-10/12 md:pl-6 md:text-left lg:w-9/12">
          <h5 class="mb-6 text-xl font-semibold"><span class="font-semibold">Nom de l'activité:</span> {{ $activite->nom_activite }}</h5>

          <p>
            <span class="font-semibold">Commentaires sur l'activité:</span>
            {{ $activite->commentaires_activite }}
          </p>

          <p>
            <span class="font-semibold">Date de l'activité:</span>
            {{  $activite->date_activite }}
          </p>

        </div>
      </div>
    </section>
    <!-- Section: Design Block -->
  </div>
  <!-- Co


  @stop
