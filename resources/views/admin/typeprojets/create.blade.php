@extends('dashboard')


@section('main_content_admin_part')

    <h5 class="text-gray-800 text-xl font-bold mt-3">Nouveau type de Projet</h5>

    <form method="POST" action="{{ route('typeprojets.store') }}">
        @csrf

        <div class="mb-6">
          <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type du projet</label>
          <input type="text" name="nameTypeProjet" placeholder="Saisissez le type de projet"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>

        <button type="submit" class="px-4 py-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-8 sm:w-auto  py-4.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enregistrer</button>
      </form>


@stop
