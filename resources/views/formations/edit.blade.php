<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Formation</title>
</head>
<body>
    <h1>Edit Formation</h1>
    <form action="{{ route('formations.update', $formation->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <label for="image">Image du formation:</label><br>
        <input type="file" id="image" name="image" value="{{ $formation->image }}"><br>

        <label for="filiere">Filiere:</label><br>
        <input type="text" id="filiere" name="filiere" value="{{ $formation->filiere }}"><br>

        <label for="prix">Prix:</label><br>
        <input type="number" id="prix" name="prix" value="{{ $formation->prix }}"><br>

        <label for="titre">Titre:</label><br>
        <input type="text" id="titre" name="titre" value="{{ $formation->titre }}"><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description">{{ $formation->description }}</textarea><br>

        <label for="image_formateur">Image Formateur:</label><br>
        <input type="file" id="image_formateur" name="image_formateur" value="{{ $formation->image_formateur }}"><br>

        <label for="nom_formateur">Nom Formateur:</label><br>
        <input type="text" id="nom_formateur" name="nom_formateur" value="{{ $formation->nom_formateur }}"><br>

        <label for="followers">Followers:</label><br>
        <input type="number" id="followers" name="followers" value="{{ $formation->followers }}"><br>

        <label for="favoris">Favoris:</label><br>
        <input type="number" id="favoris" name="favoris" value="{{ $formation->favoris }}"><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
