<?php include __DIR__ . '/partials/header.php'; ?>

<main class="container">
    <form action="/answer" method="POST">
        <label for="name">Name:</label>
        <input name="name" type="text" id="name" placeholder="Name">
        <label for="age"></label>
        <input name="age" id="age" type="number" placeholder="age">
        <input type="submit" value="Send">
        <input type="reset" value="Reset">
        <button>Submit</button>
    </form>
</main>
<?php include __DIR__ . '/partials/footer.php'; ?>>