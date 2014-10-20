<h1>posts</h1>
<div class="list-group">
    <? foreach ($posts as $post): ?>
        <a href="<?= BASE_URL ?>posts/view/<?= $post['post_id'] ?>/<?= $post['post_subject'] ?>" class="list-group-item">
            <?= $post['post_subject'] ?>
        </a>
    <? endforeach ?>
</div>