    <table>
        <thead>
            <th>
                Scaffolding Name
            </th>
            <th>
                Actions
            </th>
        </thead>
        <tbody>
        @if($scaffolding->count() > 0)
            @foreach($scaffolding as $definition)
                <td>
                    {{ $definition->name }}
                </td>
                <td>
                    <a href="{{ route('scaffolding.show', $definition) }}">Edit</a>
                </td>
            @endforeach
        @else
            <td colspan="2">No available scaffoldings.</td>
        @endif
        </tbody>
    </table>
