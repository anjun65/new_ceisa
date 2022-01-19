<x-layouts.base>
    {{-- <div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <img class="mx-auto h-20 w-auto" src="/img/logo.png" alt="Ceisa Logo" />
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                {{ $slot }}
            </div>
        </div>
    </div> --}}

    <div class="relative bg-white overflow-hidden">

        <div class="grid grid-cols-3 gap-4">
            <div class="col-span-2">
                <img class="w-auto object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" style="height:100vh" src="/img/bg-3.png" alt=""> 
            </div>
             <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10" style="padding-top:25vh">
              
                <div class="grid grid-cols-2 gap-4">
                    <img class="w-1/2 h-auto items-end" style="margin-left:40%" src="/img/logobc150.png" alt="">
                    <img class="w-1/2 h-auto" src="/img/logo-poltek.png" alt="">
                </div>
                <h1 class="text-2xl font-semibold text-gray-900 my-4">Selamat datang di Simulasi  Logistik CEISA 4.0</h1>
                
                {{ $slot }}
            </div>
        </div>

        {{-- <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="/img/bg-3.png" alt="">
            </div>

        </div>

        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                <div class="sm:text-center lg:text-left">
                    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                        <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                            <img class="h-56 w-full" src="/img/logobc150.png" alt="">
                            <img class="h-56 w-full" src="/img/logo-poltek.png" alt="">
                            <p>Selamat datang di Simulasi CEISA 4.0</p>
                            <p>Politeknik Negeri Negeri Batam</p>
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </main>
        </div> --}}
    </div>
</x-layouts.base>
