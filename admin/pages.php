<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet">
    <title>Editing</title>
</head>
<form action="#" method="POST">
    <label for="pageSelect">Select Page:</label>
    <select id="pageSelect" name="page">
        <option value="about">About</option>
        <option value="pricing">Pricing</option>
        <option value="room">Room</option>
        <option value="content">Content</option>
        <option value="events">Events</option>
        <option value="contact">Contact</option>
    </select>

    <br>

    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required>

    <br>

    <label for="content">Content:</label>
    <textarea id="content" name="content" rows="4" cols="50" required></textarea>

    <br>

    <input type="submit" value="Submit">

</form>