

<div class='list_article'>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Picture</th>
            <th scope="col">description</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($articles as  $article) { ?>
          <tr>
            <th class='pt-4' scope="row"><?php echo $article["id"] ?></th>
            <td class='pt-4'><?php echo $article["titre"] ?></td>
            <td class='profile_article_img pt-3'><img class='img-fluid' src="<?php echo $article["image"] ?>" alt=""></td>
            <td class='pt-4'><?php echo substr($article["description"], 0, 40) . "..."  ?></td>
            <td>
              <a href="<?php echo "edit-article&id=".$article["id"] ?>" class="btn btn-warning">Edit</a>
              <a href="<?php echo "delete-article&id=".$article["id"] ?>" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        <?php } ?>
        </tbody>
    </table>
</div>