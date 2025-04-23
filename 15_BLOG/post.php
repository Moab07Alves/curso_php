<?php
include_once("templates/header.php");
if (isset($_GET['id'])) {
    $postId = $_GET['id'];

    $currentPost;

    foreach ($posts as $post) {
        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}
?>
<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ex voluptatum facilis, dolore libero aperiam porro placeat praesentium, laboriosam perferendis animi aut tempora corporis voluptatem nihil voluptatibus quia repudiandae. Ad.
            Iste nemo a laboriosam necessitatibus optio consequuntur, quod doloremque debitis amet minus distinctio quas officia facilis expedita ex eveniet explicabo dolore in magni sint ad, quibusdam, quaerat aperiam. Deleniti, iure!
            Quis explicabo ratione aperiam quaerat harum dolorem in, fuga reprehenderit, ad rem repellendus ab veritatis rerum nemo provident necessitatibus consectetur deleniti odit a non vero praesentium excepturi. Eligendi, assumenda laboriosam.
            Modi at quos animi illum sapiente! Eligendi magnam architecto nemo beatae, odio officia dolorum praesentium enim eveniet eius dolores aliquid earum porro? Ducimus placeat aut consequatur saepe, quasi voluptatum tempora.
            Odio sapiente doloremque asperiores fuga, aliquam enim laudantium, esse atque non quis quos est qui corrupti facere! Sed aut dignissimos officiis modi ab assumenda, eveniet possimus, quos cumque velit quis.</p>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ex voluptatum facilis, dolore libero aperiam porro placeat praesentium, laboriosam perferendis animi aut tempora corporis voluptatem nihil voluptatibus quia repudiandae. Ad.
            Iste nemo a laboriosam necessitatibus optio consequuntur, quod doloremque debitis amet minus distinctio quas officia facilis expedita ex eveniet explicabo dolore in magni sint ad, quibusdam, quaerat aperiam. Deleniti, iure!
            Quis explicabo ratione aperiam quaerat harum dolorem in, fuga reprehenderit, ad rem repellendus ab veritatis rerum nemo provident necessitatibus consectetur deleniti odit a non vero praesentium excepturi. Eligendi, assumenda laboriosam.
            Modi at quos animi illum sapiente! Eligendi magnam architecto nemo beatae, odio officia dolorum praesentium enim eveniet eius dolores aliquid earum porro? Ducimus placeat aut consequatur saepe, quasi voluptatum tempora.
            Odio sapiente doloremque asperiores fuga, aliquam enim laudantium, esse atque non quis quos est qui corrupti facere! Sed aut dignissimos officiis modi ab assumenda, eveniet possimus, quos cumque velit quis.</p>
    </div>
    <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tags-list">
        <?php foreach ($currentPost['tags'] as $tag): ?>
            <li><a href="#"><?= $tag ?></a></li>
        <?php endforeach ?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
        <?php foreach ($categories as $category): ?>
            <li><a href="#"><?= $category ?></a></li>
        <?php endforeach ?>
    </ul>
</aside>
</main>
<?php
include_once("templates/footer.php");
?>