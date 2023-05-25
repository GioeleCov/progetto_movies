<x-layout>

    <body class="bg-image-custom mb-0">
        <h1 class="text-black text-center">DAGG Project <br> Members</h1>
        <div class="container">            
            <div class="row ">
            @foreach ($members as $member)
                <div class="col-md-6 justify-content-center d-flex">
                    <div class="card my-4 custom-card" style="width: 18rem;">
                        <img src="{{ $member['img'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $member['name'] }} {{ $member['surname'] }}</h5>
                            <p>Età: {{ $member['age'] }}</p>
                            <p>{{ $member['description'] }}</p>
                            <a href="{{ $member['url-ln'] }}"><i class="text-black fa-brands fa-linkedin custom-hover"></i></a>
                            <a href=""><i class="text-black fa-brands fa-instagram custom-hover"></i></a>                       
                        </div>
                    </div>
                </div>           
            @endforeach
            </div>
        </div>




        <!-- inizio footer  -->
        <x-footer />
        <!-- fine footer -->
    </body>
</x-layout>