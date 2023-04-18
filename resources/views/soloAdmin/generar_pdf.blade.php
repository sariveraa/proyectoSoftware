                            <table>
                                <thead style="background-color: #94b43b">
                                    <tr>
                                        <th>Código</th>
										<th>Nombre</th>
										<th>Descripcion</th>
										<th>Precio</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productos as $producto)
                                        <tr>
                                            <td>{{ $producto->codigo }}</td>
											<td>{{ $producto->nombre }}</td>
											<td>{{ $producto->descripcion }}</td>
											<td>{{ $producto->precio }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </main>