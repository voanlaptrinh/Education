
    <h1>Package Purchase</h1>

    <p>Package: {{ $package->name }}</p>
    <p>Price: ${{ $package->price }}</p>

    <img src="{{ $qrCodeData }}" alt="QR Code">

    <p>Scan the QR code to complete your purchase.</p>
