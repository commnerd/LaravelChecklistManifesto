    <table>
        <thead>
            <th>
                Checklist Name
            </th>
            <th>
                Actions
            </th>
        </thead>
        <tbody>
        @if($checklists->count() > 0)
            @foreach($checklists as $checklist)
                <td>
                    {{ $checklist->name }}
                </td>
                <td>
                    <a href="{{ route('checklists.show', $checklist) }}">Edit</a>
                </td>
            @endforeach
        @else
            <td colspan="2">No available checklists.</td>
        @endif
        </tbody>
    </table>
