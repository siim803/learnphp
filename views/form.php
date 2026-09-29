<?php include __DIR__ . "/partials/header.php"; ?>

<main class="container">
<form action="/answer" method="$_POST">
    <label for="name">Name:</label>
    <input type="text" id="name" placeholder="Name">
    <label for="age">Age:</label>
    <input type="number" id="age" placeholder="age">
    <input type="submit" value="Send">
    <input type="reset" value="reset">
    <button>Submit</button>    
</form>
</main>

<?php include __DIR__ . "/partials/footer.php"; ?>