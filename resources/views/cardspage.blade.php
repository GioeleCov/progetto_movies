<x-layout>
    <div class="container-fluid sofa">
        @foreach ($series as $serie)
        <div class="row align-items-center">
            <div class="col-md-5 d-flex justify-content-center align-items-center">
                <div class="card my-4" style="width: 18rem;">
                   <img src="{{ $serie['img'] }}" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-md-6">
                <h1 class="text-light">
                    {{ $serie['name'] }}
                </h1>
                <p class="fs-4 text-light">
                    {{ $serie['description']}}
                </p>
                <p class="fs-5 text-light">
                    <b>Anno:</b> {{ $serie['year']}} <br> <b>Regista:</b> {{ $serie['director']}}
                </p>
            </div>
        </div>
        @endforeach
    </div>
</x-layout>