<!DOCTYPE html>
<html>
<head>
    <title>Formations</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        .image-column {
            width: 80px;
        }
        .formateur-image-column {
            width: 80px;
        }
        .description-column {
            width: 200px;
        }
    </style>
</head>
<body>
    <h1>Listes des formations</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th class="image-column">Image</th>
                <th>Filiere</th>
                <th>Prix</th>
                <th>Title</th>
                <th class="description-column">Description</th>
                <th>Nom Formateur</th>
            </tr>
        </thead>
        <tbody>
            @foreach($formations as $formation)
                <tr>
                    <td>{{ $formation->id }}</td>
                    <td><img src="{{ public_path($formation->image) }}" alt="Formation Image" width="50"></td>
                    <td>{{ $formation->filiere }}</td>
                    <td>{{ $formation->prix }}</td>
                    <td>{{ $formation->title }}</td>
                    <td>{{ $formation->description }}</td>
                    <td>{{ $formation->nom_formateur }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
