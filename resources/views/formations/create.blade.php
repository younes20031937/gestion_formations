<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Formation</title>
</head>
<body>
    <h1>Create New Formation</h1>
    <form action="{{ route('formations.store') }}" method="POST">
        @csrf

        <label for="image">Image de formation:</label><br>
        <input type="file" id="image" name="image" required><br>

        <label for="filiere">Filiere:</label><br>
        <input type="text" id="filiere" name="filiere" required><br>

        <label for="prix">Prix:</label><br>
        <input type="number" id="prix" name="prix" required><br>

        <label for="titre">Titre:</label><br>
        <input type="text" id="titre" name="titre" required><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description" required></textarea><br>

        <label for="image_formateur">Image Formateur:</label><br>
        <input type="file" id="image_formateur" name="image_formateur" required><br>

        <label for="nom_formateur">Nom Formateur:</label><br>
        <input type="text" id="nom_formateur" name="nom_formateur" required><br>

        <label for="followers">Followers:</label><br>
        <input type="number" id="followers" name="followers" required><br>

        <label for="favoris">Favoris:</label><br>
        <input type="number" id="favoris" name="favoris" required><br>

        <button type="submit">Create</button>
    </form>
</body>
</html>
