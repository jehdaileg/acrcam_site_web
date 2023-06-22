@extends('dashboard')


@section('main_content_admin_part')

    <h5 class="text-gray-800 text-xl font-bold mt-3">Nouveau Projet</h5>

    <form method="POST" action="{{ route('projets.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-6">
          <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom du projet:</label>
          <input type="text" name="name" placeholder="Saisissez le nom du projet"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>


        <div class="mb-6">
            <div class="w-full">
                <div class="mx-3">
                    <div class="single_form mt-8">
                        <textarea name="commmentaires_projet" id="message" placeholder="Message" rows="5" class="w-full rounded-md py-4 px-6 border border-solid border-body-color resize-none"></textarea>
                    </div> <!-- single form -->
                </div>
            </div>
          </div>

          <div class="mb-8">

            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choisir le type de projet:</label>
            <select name="type_projet_id" id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                @foreach($types_projets as $type_projet)
                <option value="{{ $type_projet->id }}">{{ $type_projet->nameTypeProjet }}</option>
                @endforeach

            </select>

          </div>

          <div class="mb-6">
            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date de réalisation:</label>
            <input type="date" name="date_realisation" placeholder="Saisissez la date de réalisation du projet"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
          </div>


          <div class="mb-6">
            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom du partenaire:</label>
            <input type="text" name="partenaire_concerne" placeholder="Saisissez le nom du partenaire dans le projet"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
          </div>

          <div class="mb-6">
            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Estimer un revenu du projet:</label>
            <input type="number" name="revenu_benefice_projet" placeholder="Saisissez une marge de revenu du projet"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
          </div>

          <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choisir le statut du projet:</label>
          <select name="statut_projet" id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">

              <option value="1">En cours de réalisation</option>
              <option value="2">Réalisé</option>

          </select>

        <button type="submit" class="mt-2 px-4 py-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-8 sm:w-auto  py-4.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enregistrer</button>
      </form>


@stop
