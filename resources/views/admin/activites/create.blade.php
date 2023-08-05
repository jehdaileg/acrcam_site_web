@extends('dashboard')


@section('main_content_admin_part')

    <h5 class="text-gray-800 text-xl font-bold mt-3">Nouvelle Activité</h5>

    <form method="POST" action="{{ route('activites.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-6">
          <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom de l'activité:</label>
          <input type="text" name="nom_activite" placeholder="Saisissez le nom de l'activite"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>


        <div class="mb-6">
            <div class="w-full">
                <div class="mx-3">
                    <div class="single_form mt-8">
                        <textarea name="commentaires_activite" id="message" placeholder="Message" rows="5" class="w-full rounded-md py-4 px-6 border border-solid border-body-color resize-none"></textarea>
                    </div> <!-- single form -->
                </div>
            </div>
          </div>



          <div class="mb-6">
            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date de réalisation:</label>
            <input type="date" name="date_activite" placeholder="Saisissez la date de réalisation de l'activité"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
          </div>



        <button type="submit" class="mt-2 px-4 py-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-8 sm:w-auto  py-4.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enregistrer</button>
      </form>


@stop
