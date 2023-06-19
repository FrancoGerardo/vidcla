<div>
    <h2>Reporte de Compras</h2>
    <table>
        <thead>
            <tr>
                <th>Fecha</th>
                <th>ID_P</th>
                <th>Parabrisa</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Total</th>
                <th>Almacen</th>
                <th>Proveedor</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nota_compras as $nota_compra)
                <tr>
                    <td>{{ $nota_compra->fecha }}</td>
                    <td>{{ $nota_compra->parabrisa->id }}</td>
                    <td>
                        Ab:{{ $nota_compra->parabrisa->abajo }}
                        Ar:{{ $nota_compra->parabrisa->arriba }}
                        Co:{{ $nota_compra->parabrisa->costado }}
                        Me:{{ $nota_compra->parabrisa->medio }}
                    </td>
                    <td>{{ $nota_compra->cantidad }}</td>
                    <td>BS. {{ $nota_compra->precio_unitario }}</td>
                    <td>BS. {{ $nota_compra->importe_total }}</td>
                    <td>{{ $nota_compra->almacen->nombre }}</td>
                    <td>{{ $nota_compra->proveedor->nombre }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
