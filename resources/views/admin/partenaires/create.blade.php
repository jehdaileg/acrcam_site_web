@extends('dashboard')


@section('main_content_admin_part')

    <h5 class="text-gray-800 text-xl font-bold mt-3">Nouveau Partenaire</h5>

    <form method="POST" action="{{ route('partenaires.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-6">
          <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom du partenaire:</label>
          <input type="text" name="name" placeholder="Saisissez le nom du partenaire"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>


        <div class="mb-6">
            <div class="w-full">
                <div class="mx-3">
                    <div class="single_form mt-8">
                        <textarea name="commentaires" id="message" placeholder="Message" rows="5" class="w-full rounded-md py-4 px-6 border border-solid border-body-color resize-none"></textarea>
                    </div> <!-- single form -->
                </div>
            </div>
          </div>


        <div class="mb-6">
            <div class="mb-3">
                <label
                  for="formFile"
                  class="mb-2 inline-block text-neutral-700 dark:text-neutral-200"
                  >Image/Logo</label
                >
                <input
                  class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                  type="file"
                  name="image_logo"
                  id="formFile" />
              </div>

          </div>

        <button type="submit" class="px-4 py-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-8 sm:w-auto  py-4.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enregistrer</button>
      </form>


@stop
