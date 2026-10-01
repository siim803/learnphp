<?php
$title = 'us';

$posts = [
    [
        'title' => 'some us title 1',
        'date' => 'January 1, 2021',
        'author' => 'pets',
        'body' => 'ultra contetnt4'

    ],
    [
        'title' => 'some us title 12',
        'date' => 'January 1, 2021',
        'author' => 'pets4',
        'body' => 'ultra contetnt3'

    ],
    [
        'title' => 'some us title 11',
        'date' => 'January 1, 2021',
        'author' => 'pets3',
        'body' => 'ultra contetnt2'

    ],
    [
        'title' => 'some us title 15',
        'date' => 'January 1, 2021',
        'author' => 'pets2',
        'body' => 'ultra contetnt1'

    ],
];
?>

<?php include __DIR__ . '/partials/header.php'; ?>

  <main class="container"> 

      <div class="row g-5">
        <div class="col-md-8">
          <?php include __DIR__ . '/partials/posts.php'; ?>
        </div>
        <div class="col-md-4">
          <?php include __DIR__ . '/partials/sidebar.php'; ?>
        </div>
      </div>
    </main>
<?php include __DIR__ . '/partials/footer.php'; ?>