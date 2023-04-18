                            <table>
                                <thead style="background-color: #94b43b">
                                    <tr>
                                    <th>identidad</th>
                                    <th>nombre</th>
                                    <th>email</th>
                                    <th>tipo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->identidad }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->tipo }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </main>