@extends('layout_base')


@section('principal_section')

@if($message = Session::get('success_donate'))

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



<div class="max-w-lg mx-auto my-10 bg-white p-8 rounded-xl shadow shadow-slate-300">
    <h1 class="text-4xl font-medium">Je souhaite faire un don</h1>
    <p class="text-slate-500"> Envoyez vos informations pour faire un don.👋</p>


    <form method="POST" action="{{ route('faireundon.store') }}" class="my-10">
        @csrf
        <div class="flex flex-col space-y-5">
            <label for="email">
                <p class="font-medium text-slate-700 pb-2">Nom Complet:</p>
                <input id="text" name="full_name" type="text" class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Entrer votre nom complet ici...">
            </label>
            <label for="password">
                <p class="font-medium text-slate-700 pb-2">Email:</p>
                <input id="password" name="email" type="email" class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Saisissez votre adresse mail ici...">
            </label>

            <label for="password">
                <p class="font-medium text-slate-700 pb-2">Téléphone:</p>
                <input id="password" name="telephone" type="phone" class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Saisissez votre numéro de téléphone ici...">
            </label>

            <label for="password">
                <p class="font-medium text-slate-700 pb-2">Adresse de Résidence:</p>
                <input id="password" name="adresse" type="text" class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Saisissez votre adresse de résidence ici (Continent/Pays/Province-Ville/Commune)...">
            </label>

            <button type="submit" class="w-full py-3 font-medium text-white bg-indigo-600 hover:bg-indigo-500 rounded-lg border-indigo-500 hover:shadow inline-flex space-x-2 items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                  </svg>
                  <span>J'envoie !
                  </span>
            </button>

        </div>
    </form>
</div>


@endsection
