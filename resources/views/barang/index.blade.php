
<body>
@php
   dd($barang);
@endphp
    <div class="container mt-5">
        <h1>Daftar Barang</h1>
        <div class="row">
            @foreach($barang as $item)
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $item->gambar }}" class="card-img-top" alt="{{ $item->nama }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->nama }}</h5>
                            <p class="card-text">Merek: {{ $item->merek }}</p>
                            <p class="card-text">Harga: Rp. {{ number_format($item->harga, 0, ',', '.') }}</p>
                            <a href="{{ route('barang.show', $item->id) }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
