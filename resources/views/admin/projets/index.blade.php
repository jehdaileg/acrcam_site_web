@extends('dashboard')


@section('main_content_admin_part')

    <h5 class="text-gray-800 text-xl font-bold">Gestion des projets</h5>

    <div class="mt-2 mb-2">
        @if($message = Session::get('success'))

        <div
        class="font-regular relative block w-full max-w-screen-md rounded-lg bg-green-500 px-4 py-4 text-base text-white"
        data-dismissible="alert"
      >
        <div class="absolute top-2 left-2">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            aria-hidden="true"
            class="mt-px h-6 w-6"
          >
            <path
              fill-rule="evenodd"
              d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
              clip-rule="evenodd"
            ></path>
          </svg>
        </div>
        <div class="ml-8 mr-12">
          <h5 class="block font-sans text-xl font-semibold leading-snug tracking-normal text-white antialiased">
            Félicitations !
          </h5>
          <p class="mt-2 block font-sans text-base font-normal leading-relaxed text-white antialiased">
          {{ $message }}
          </p>
        </div>
        <div
          data-dismissible-target="alert"
          data-ripple-dark="true"
          class="absolute top-3 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20"
        >
          <div role="button" class="w-max rounded-lg p-1">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-6 w-6"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M6 18L18 6M6 6l12 12"
              ></path>
            </svg>
          </div>
        </div>
      </div>
      @endif


    </div>

    <div class="mt-7 mb-5">
        <a href="{{ route('projets.create') }}" class="px-4 py-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-8 sm:w-auto  py-4.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ajouter un Projet</a>

    </div>

<table class="shadow-lg bg-white border-collapse absolute">
    <thead>
        <tr>
            <th class="bg-blue-100 border text-left px-5 py-2">Nom du Projet</th>
            <th class="bg-blue-100 border text-left px-5 py-2">Commentaire sur le projet</th>
            <th class="bg-blue-100 border text-left px-5 py-2">Date de réalisation</th>
            <th class="bg-blue-100 border text-left px-5 py-2">Partenaire du projet</th>
            <th class="bg-blue-100 border text-left px-5 py-2">Estimation revenu du projet</th>
            <th class="bg-blue-100 border text-left px-5 py-2">Statut du projet</th>
            <th class="bg-blue-100 border text-left px-5 py-2">Type de projet</th>

            <th class="bg-blue-100 border text-left px-5 py-2">Actions</th>

          </tr>

    </thead>

    <tbody>

        @foreach($projets as $projet)


        <tr>
            <td class="border px-5 py-2">{{ $projet->name}}</td>
            <td class="border px-5 py-2">{{ $projet->commmentaires_projet}}</td>
            <td class="border px-5 py-2">{{ $projet->date_realisation}}</td>
            <td class="border px-5 py-2">{{ $projet->partenaire_concerne}}</td>
            <td class="border px-5 py-2">{{ $projet->revenu_benefice_projet}}</td>
            <td class="border px-5 py-2">{{ $projet->statut_projet}}</td>
            <td class="border px-5 py-2">{{ $projet->type_projet->nameTypeProjet}}</td>

            <td class="border px-5 py-2 flex ">
                <a href="{{ route('editProjet', $projet) }}" class="px-2 py-2 text-white bg-green-400 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-8 sm:w-auto  py-4.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Editer</a>
                <a href="{{ route('projets.show', $projet) }}" class="px-2 py-2 text-white bg-purple-400 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-8 sm:w-auto  py-4.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Consulter</a>
                <form action="{{ route('projets.destroy', $projet->id) }}" method="post" class="mt-2">
                    @csrf
                    @method('DELETE')

                    <button type="submit" onclick="return confirm('Voulez-vous vraiment supprimer ce projet ?');" class="px-2 py-2 text-white bg-red-400 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-8 sm:w-auto  py-4.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Supprimer</button>
                   </form>
            </td>


          </tr>


          @endforeach
    </tbody>

    {{ $projets->links() }}
  </table>


@stop
