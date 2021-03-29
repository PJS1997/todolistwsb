<div class="show">
  <?php $note = $params['note'] ?? null; ?>
  <?php if ($note) : ?>
    <ul>
      <li>Id: <?php echo $note['id'] ?></li>
      <li>Title: <?php echo $note['title'] ?></li>
      <li>
        Description:</br><?php echo $note['description'] ?>
      </li>
      <li>Saved: <?php echo $note['created'] ?></li>
    </ul>
    <a href="/?action=edit&id=<?php echo $note['id'] ?>">
    <button>Edit</button>
    </a>
  <?php else : ?>
    <div>Brak notatki do wyświetlenia</div>
  <?php endif; ?>
  
</div>