<!-- View stored in resources/views/greeting.blade.php -->

<html>

<body>
    @foreach ($clientes as $cliente)
    <p>Cliente {{ $cliente->nombre }}</p>
    @endforeach
</body>

</html>