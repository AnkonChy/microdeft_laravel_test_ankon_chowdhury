<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="POST">
        @csrf
        <label for="title">Title</label>
        <input type="text" placeholder="Title">
        <label for="description">Description</label>
        <input type="text" placeholder="Description">
        <label for="start_date">Start Date</label>
        <input type="date">
        <label for="end_date">End Date</label>
        <input type="date"><br><br>
        <input type="checkbox" id="" name="developer1" value="Developer1">
        <label for="developer1"> Developer 1</label>
        <input type="checkbox" id="" name="developer2" value="Developer2">
        <label for="developer2"> Developer 2</label>
        <input type="checkbox" id="" name="developer3" value="Developer3">
        <label for="developer3"> Developer 3</label>
        <input type="checkbox" id="" name="developer4" value="Developer4">
        <label for="developer4"> Developer 4</label>
    </form>
</body>

</html>
