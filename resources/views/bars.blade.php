@extends('layout.app')

@section('title')
    Liste des bars
@endsection

@section('content')
    <div class="container px-4 mx-auto sm:px-8">
        <div class="py-8">
            <a href="#">
                <div class="bg-blue-500 hover:bg-blue-700 cursor-pointer text-gray-50 rounded-lg text-center w-full">
                    Ajouter un bar
                </div>
            </a>
            <div class="px-4 py-4 -mx-4 overflow-x-auto sm:-mx-8 sm:px-8">
                <div class="inline-block min-w-full overflow-hidden rounded-lg shadow">
                    <table class="min-w-full leading-normal">
                        <thead>
                        <tr>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                                Nom
                            </th>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                                Nombre de chat
                            </th>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                                Ouvert le
                            </th>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                                status
                            </th>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($bars as $bar)
                                <tr>
                                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                        <div class="flex items-center">
                                            <div class="ml-3">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{ $bar->name }}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ $bar->cats()->count() }}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ $bar->opened_at_for_humans }}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                        @if($bar->open)
                                            <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900">
                                                <span aria-hidden="true" class="absolute inset-0 bg-green-200 rounded-full opacity-50">
                                                </span>
                                                <span class="relative">
                                                    Ouvert
                                                </span>
                                            </span>
                                        @else
                                            <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-red-900">
                                                <span aria-hidden="true" class="absolute inset-0 bg-red-200 rounded-full opacity-50">
                                                </span>
                                                <span class="relative">
                                                    Fermé
                                                </span>
                                            </span>
                                        @endif

                                    </td>
                                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                        <a href="{{ route('showBar', ['bar_id' => $bar->id]) }}" class="text-indigo-600 hover:text-indigo-900 bg-blue-200 hover:bg-blue-500 px-2 rounded-lg"">
                                        Voir
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
