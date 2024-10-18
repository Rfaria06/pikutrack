<div class="w-full">
    <h1 class="font-bold text-3xl mb-4">User Management</h1>

    <div class="divider"></div>

    <livewire:users.create />

    <table class="table table-zebra">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Type</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($this->users as $user)
                <livewire:users.user-table-row :$user :key="$user->id" />
            @endforeach
        </tbody>
    </table>
</div>