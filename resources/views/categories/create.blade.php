<h3>Form Categories</h3>
<form action="{{ route('categories.store') }}" method="POST">
    {{ csrf_field() }}
    <label>Categorie Name</label>
    <input type="text" name="categorie_name">
    <br>
    <label>Description</label>
    <textarea name="description"></textarea>
    <br>
    <button type="submit">Save</button>
    <a href={{ route('categories.index') }}>Cancel</a>
</form>
