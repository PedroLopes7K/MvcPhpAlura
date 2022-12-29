<?php
require __DIR__ . '/../header.php'; ?>
<a href="/public/novo-curso" class="btn btn-primary mb-2">
  Novo curso
</a>
<ul class="list-group m-50">
  <?php foreach ($cursos as $curso) : ?>
    <li class="list-group-item">
      <?= $curso->getDescricao(); ?>
    </li>
  <?php endforeach; ?>
</ul>
<?php
require __DIR__ . '/../footer.php';
