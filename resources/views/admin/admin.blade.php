<h2>Form Tambah Admin</h2>

@if (session('success'))
<p style="color: green;">{{ session('success') }}</p>
@endif

@if ($errors->any())
<ul style="color: red;">
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<form method="POST" action="{{ route('admin.store') }}">
    @csrf
    <input type="text" name="name" placeholder="Nama" value="{{ old('name') }}"><br>
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"><br>
    <input type="text" name="no_hp" placeholder="No. hp" value="{{ old('no_hp') }}"><br>
    <input type="text" name="alamat" placeholder="Alamat" value="{{ old('alamat') }}"><br>
    <label for="">Pilih Role :</label>
    <select name="role">
        <option value="Super Admin">Super Admin</option>
        <option value="Kasir">Kasir</option>
    </select><br>
    <button type="submit">Simpan</button>
</form>