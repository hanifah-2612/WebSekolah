<h3>Form Categories</h3>
<form action="{{ route('categories.update',$dataeditcategorie->categorie_id) }}" method="POST">
    {{ csrf_field() }}
    @method("PUT")
    <label>Categorie Name</label>
    <input type="text" name="categorie_name" value={{ $dataeditcategorie->categorie_name}}" required>
    <br>
    <label>Description</label>
    <textarea name="description">{{ $dataeditcategorie->description }}</textarea>
    <br>
    <button type="submit">update</button>
    <a href={{ route('categories.index') }}>Cancel</a>
</form>
