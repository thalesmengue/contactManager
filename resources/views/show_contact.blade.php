@extends('layout.scaffold')

@section('title', 'Contact Manager')

@section('content')

<section class="pt-16 bg-blueGray-50">
    <div class="w-full lg:w-4/12 px-4 mx-auto">
        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-16">
            <div class="px-6">
                <div class="flex flex-wrap justify-center">
                    <div class="w-full px-4 flex justify-center">
                    </div>
                    <div class="w-full px-4 text-center mt-20">
                        <div class="flex justify-center py-4 lg:pt-4 pt-8">
                            <div class="mr-4 p-3 text-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-12">
                    <h3 class="text-xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2">
                        Name: {{$contact->name}}
                    </h3>
                    <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
                        <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
                        Contact: {{$contact->contact}}
                    </div>
                    <div class="mb-2 text-blueGray-600 mt-10">
                        <i class="fas fa-briefcase mr-2 text-lg text-blueGray-400"></i>
                        Email: {{$contact->email}}
                    </div>
                </div>
                <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
                    <div class="flex flex-wrap justify-center">
                        <div>
                            <form method="post" action="{{ route("destroy.contact", $contact->id)}}">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="text-red-600 hover:text-red-900 ml-6">Destroy</button>
                            </form>
                        </div>
                        <div class="flex flex-row ml-12">
                            <a href="{{route("edit.contact", $contact->id)}}" class="text-blue-600 hover:text-blue-900">
                                Edit
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
