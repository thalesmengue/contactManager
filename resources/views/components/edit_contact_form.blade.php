@props(["contact"])
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3">
        <h3 class="text-2xl font-bold text-center">Edit a contact</h3>
        <form action="{{route("update.contact", $contact->id)}}" method="post">
            @csrf
            <div class="mt-4">
                <div>
                    <label class="block" for="Name">Name<label>
                            <input type="text" placeholder="Name" name="name" value="{{$contact->name}}"
                                   class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                            @if($errors->has("name"))
                                <div class="text-center text-base text-red-600">
                                    {{ $errors->first("name") }}
                                </div>
                    @endif
                </div>
                <div class="mt-4">
                    <label class="block" for="email">Contact<label>
                            <input type="text" placeholder="contact" name="contact" value="{{$contact->contact}}"
                                   class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                            @if($errors->has("contact"))
                                <div class="text-center text-base text-red-600">
                                    {{ $errors->first("contact") }}
                                </div>
                    @endif
                </div>
                <div class="mt-4">
                    <label class="block" for="email">Email<label>
                            <input type="text" placeholder="Email" name="email" value="{{$contact->email}}"
                                   class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                            @if($errors->has("email"))
                                <div class="text-center text-base text-red-600">
                                    {{ $errors->first("email") }}
                                </div>
                    @endif
                </div>
                <div class="flex justify-center items-center">
                    <button class="px-6 py-2 mt-4 text-white bg-indigo-600 rounded-lg hover:bg-indigo-900">edit</button>
                </div>
            </div>
        </form>
    </div>
</div>
