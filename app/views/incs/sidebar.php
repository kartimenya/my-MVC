<div class="sidebar col-4">
  <h3>Recent post</h3>
  <ul class="list-group">
    <?php foreach ($recent_posts as $post): ?>
    <li class="list-group-item">
      <a href="posts?id=<?= $post['id'] ?>"><?= h($post['title']) ?></a>
    </li>
    <?php endforeach ?>
  </ul>
</div>
