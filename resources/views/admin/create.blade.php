
    <h1>Ajouter un utilisateur</h1>
    <form action="{{ route('admin.users.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nom" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Mot de passe" required>
        <select name="role">
            <option value="admin">Admin</option>
            <option value="vendor">Vendor</option>
            <option value="client">Client</option>
            <option value="user">User</option>
        </select>
        <button type="submit">Ajouter</button>
    </form>

