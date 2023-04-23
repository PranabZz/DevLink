@extends('app')
@section('content')
    <link href="https://unpkg.com/tailwindcss@1.4.6/dist/tailwind.min.css" rel="stylesheet" />

    <body>
        <div class=" w-full flex antialiased text-white" style="margin-top: 100px; height: 850px;">
            <main class="flex-grow flex flex-row min-h-0">
                <section
                    class="flex flex-col flex-none overflow-auto w-24 lg:max-w-sm md:w-2/5 transition-all duration-300 ease-in-out">
                    <div class="search-box p-4 flex-none">
                        <form onsubmit="">
                            <div class="relative">
                                <label>
                                    <input
                                        class="rounded-full py-2 pr-6 pl-10 w-full border border-gray-200 bg-gray-700 text-black focus:shadow-md transition duration-300 ease-in"
                                        type="text" value="" placeholder="Search Messenger" />

                                </label>
                            </div>
                        </form>
                    </div>
                    <div class="contacts p-2 flex-1 overflow-y-scroll">
                        @foreach ($contacts as $contact)
                            <a href="{{ route('message', $contact->message_to) }}">
                                <div
                                    class="flex justify-between items-center p-8 hover:bg-gray-800  hover:opacity-0.1 rounded-lg relative">
                                    <div class="w-16 h-16 relative flex flex-shrink-0">
                                        <img class="shadow-md rounded-full w-full h-full object-cover"
                                            src="{{ asset('images/images.png') }}" alt="" />
                                    </div>
                                    <div class="flex-auto min-w-0 ml-4 mr-6 hidden md:block">
                                        <p>{{ $contact->message_to }}</p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </section>

                <section class="flex flex-col flex-auto border-l border-gray-700">
                    <div class="chat-header px-6  py-10 flex flex-row flex-none justify-between items-center shadow "
                        style="background-color: #1c2845;">
                        <div class="flex">
                            <div class="w-12 h-12 mr-4 relative flex flex-shrink-0">
                                <img class="shadow-md rounded-full w-full h-full object-cover"
                                    src="{{ asset('images/images.png') }}" alt="" />
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>


    </body>


    </html>
@endsection
