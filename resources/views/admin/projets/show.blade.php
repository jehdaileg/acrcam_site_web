
@extends('dashboard')


@section('main_content_admin_part')


<div class="container my-24 mx-auto md:px-6">
    <!-- Section: Design Block -->
    <section class="mb-32">
      <div class="flex flex-wrap">
        <div class="w-full shrink-0 grow-0 basis-auto md:w-2/12 lg:w-3/12">

            @foreach($projet->imageprojets as $img )
            <div>


                <img src="{{ asset($img->image_projet) }}" alt="" />
            </div>

            @endforeach

        </div>

        <div class="w-full shrink-0 grow-0 basis-auto text-center md:w-10/12 md:pl-6 md:text-left lg:w-9/12">
          <h5 class="mb-6 text-xl font-semibold"><span class="font-semibold">Nom du projet:</span> {{ $projet->name }}</h5>

          <p>
            <span class="font-semibold">Commentaires sur le projet:</span>
            {{ $projet->commmentaires_projet }}
          </p>

          <p>
            <span class="font-semibold">Type du projet:</span>
            {{ $projet->type_projet->nameTypeProjet }}
          </p>

        </div>
      </div>
    </section>
    <!-- Section: Design Block -->
  </div>
  <!-- Co


  @stop
