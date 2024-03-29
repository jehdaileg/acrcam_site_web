@extends('dashboard')


@section('main_content_admin_part')

 <h4 class="text-gray-800 text-2xl mb-4">Suivi des contacts</h4>

 <table class="shadow-lg bg-white border-collapse absolute">
    <thead>
        <tr>
            <th class="bg-blue-100 border text-left px-5 py-2">Nom du contact</th>
            <th class="bg-blue-100 border text-left px-5 py-2">Email du contact</th>
            <th class="bg-blue-100 border text-left px-5 py-2">Message du contact</th>
            <th class="bg-blue-100 border text-left px-5 py-2">Téléphone du contact</th>
            <th class="bg-blue-100 border text-left px-5 py-2">Date de la prise de contact</th>
            <th class="bg-blue-100 border text-left px-5 py-2">Statut de suivi de contact</th>
            <th class="bg-blue-100 border text-left px-5 py-2">Actualisation</th>


          </tr>

    </thead>

    <tbody>

        @foreach($contacts as $contact)


        <tr>
            <td class="border px-5 py-2">{{ $contact->name }}</td>
            <td class="border px-5 py-2">{{ $contact->email }}</td>
            <td class="border px-5 py-2">{{ $contact->message }}</td>
            <td class="border px-5 py-2">{{ $contact->phone }}</td>
            <td class="border px-5 py-2">{{ Carbon\Carbon::parse($contact->created_at->diffForHumans()) }}</td>
            <td class="border px-5 py-2">En attente de suivi</td>
            <td class="border px-5 py-2">
                <a href="" class="rounded py-2 px-3 text-white bg-green-400">Actualiser</a>
            </td>
          </tr>


          @endforeach
    </tbody>

    {{ $contacts->links() }}

  </table>

@endsection
