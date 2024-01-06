<table class="table-auto border-collapse border-2 border-slate-500">
    <thead>
        <tr>
            <th class="border border-slate-500">Username</th>
            <th class="border border-slate-500">Email</th>
        </tr>
    </thead>
    <tbody id="user-table-body">
        @foreach($users as $user)
            <tr>
                <td class="border border-slate-500">{{ $user['username'] }}</td>
                <td class="border border-slate-500">{{ $user['email'] }}</td>
            </tr>
        @endforeach

    </tbody>
</table>
<button
    class="w-24 h-10 bg-cyan-500 shadow-lg shadow-cyan-500/50 hover:bg-cyan-200"
    hx-get="{{ route('htmx-users-add-row') }}"
    hx-swap="afterend"
    hx-target="#user-table-body"
    hx-trigger="click">
    +
</button>
