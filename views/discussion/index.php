<?php

use app\components\TranslitWidget;
use yii\helpers\Url;

?>

<section style="padding: 0;">
    <div class="container" id="forum">

        <div class="table-responsive">

            <?php foreach($DiscussionCategories as $categoryName=>$categoryPosts):?>

                <?php

                $link = TranslitWidget::widget(['link' => str_replace(' ', '_', trim($categoryName))]) . '-' . $categoryPosts[0]['id'];

                ?>
                <table class="table forum table-striped">

                    <thead>
                    <tr>
                        <th class="cell-stat"></th>
                        <th>
                            <h3><a href="<?= Url::base() . '/category/' . $link ?>" class="discussion-link"><?=$categoryName?></a> <i class="fa fa-pencil"></i></h3>
                        </th>
                        <th class="cell-stat text-center hidden-xs hidden-sm">Topics</th>
                        <th class="cell-stat text-center hidden-xs hidden-sm">Posts</th>
                        <th class="cell-stat-2x hidden-xs hidden-sm">Last Post</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($categoryPosts as $postId=>$post):?>
                        <?php
                        $postLink = TranslitWidget::widget(['link' => str_replace(' ', '_', trim($post['text']))]) . '-' . $post['id'];
                        ?>
                        <tr>
                            <td class="text-center"><i class="fa fa-envelope fa-2x text-primary"></i></td>
                            <td>
                                <h4><a href="<?= Url::base() . '/post/' . $postLink ?>"><?=$post['text']?></a><br>
                                    <small>Some description</small>
                                </h4>
                            </td>
                            <td class="text-center hidden-xs hidden-sm"><a href="#">9 542</a></td>
                            <td class="text-center hidden-xs hidden-sm"><a href="#">89 897</a></td>
                            <td class="hidden-xs hidden-sm">by <a href="#">John Doe</a><br>
                                <small><i class="fa fa-clock-o"></i> 3 months ago</small>
                            </td>
                        </tr>

                    <?php endforeach;?>
                    </tbody>
                </table>

            <?php endforeach; ?>

        <!--<table class="table forum table-striped">

                <thead>
                <tr>
                    <th class="cell-stat"></th>
                    <th>
                        <h3>Вопросы психологам (ссылка)</h3>
                    </th>
                    <th class="cell-stat text-center hidden-xs hidden-sm">Topics</th>
                    <th class="cell-stat text-center hidden-xs hidden-sm">Posts</th>
                    <th class="cell-stat-2x hidden-xs hidden-sm">Last Post</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-center"><i class="fa fa-question fa-2x text-primary"></i></td>
                    <td>
                        <h4><a href="#">Вопрос 1</a><br>
                            <small>Some description</small>
                        </h4>
                    </td>
                    <td class="text-center hidden-xs hidden-sm"><a href="#">9 542</a></td>
                    <td class="text-center hidden-xs hidden-sm"><a href="#">89 897</a></td>
                    <td class="hidden-xs hidden-sm">by <a href="#">John Doe</a><br>
                        <small><i class="fa fa-clock-o"></i> 3 months ago</small>
                    </td>
                </tr>
                <tr>
                    <td class="text-center"><i class="fa fa-question fa-2x text-primary"></i></td>
                    <td>
                        <h4><a href="#">Вопрос 2</a><br>
                            <small>Some description</small>
                        </h4>
                    </td>
                    <td class="text-center hidden-xs hidden-sm"><a href="#">9 542</a></td>
                    <td class="text-center hidden-xs hidden-sm"><a href="#">89 897</a></td>
                    <td class="hidden-xs hidden-sm">by <a href="#">John Doe</a><br>
                        <small><i class="fa fa-clock-o"></i> 3 months ago</small>
                    </td>
                </tr>
                <tr>
                    <td class="text-center"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
                    <td>
                        <h4><a href="#">Вопрос 3</a><br>
                            <small>Category description</small>
                        </h4>
                    </td>
                    <td class="text-center hidden-xs hidden-sm"><a href="#">6532</a></td>
                    <td class="text-center hidden-xs hidden-sm"><a href="#">152123</a></td>
                    <td class="hidden-xs hidden-sm">by <a href="#">Jane Doe</a><br>
                        <small><i class="fa fa-clock-o"></i> 1 years ago</small>
                    </td>
                </tr>
                </tbody>
            </table>-->
            <!--<table class="table forum table-striped">
                <thead>
                <tr>
                    <th class="cell-stat"></th>
                    <th>
                        <h3>Вопросы</h3>
                    </th>
                    <th class="cell-stat text-center hidden-xs hidden-sm">Topics</th>
                    <th class="cell-stat text-center hidden-xs hidden-sm">Posts</th>
                    <th class="cell-stat-2x hidden-xs hidden-sm">Last Post</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-center"><i class="fa fa-heart fa-2x text-primary"></i></td>
                    <td>
                        <h4><a href="#">More more more</a><br>
                            <small>Category description</small>
                        </h4>
                    </td>
                    <td class="text-center hidden-xs hidden-sm"><a href="#">6532</a></td>
                    <td class="text-center hidden-xs hidden-sm"><a href="#">152123</a></td>
                    <td class="hidden-xs hidden-sm">by <a href="#">Jane Doe</a><br>
                        <small><i class="fa fa-clock-o"></i> 3 months ago</small>
                    </td>
                </tr>
                <tr>
                    <td class="text-center"><i class="fa fa-magic fa-2x text-primary"></i></td>
                    <td>
                        <h4><a href="#">Haha</a><br>
                            <small>Category description</small>
                        </h4>
                    </td>
                    <td class="text-center hidden-xs hidden-sm"><a href="#">6532</a></td>
                    <td class="text-center hidden-xs hidden-sm"><a href="#">152123</a></td>
                    <td class="hidden-xs hidden-sm">by <a href="#">Jane Doe</a><br>
                        <small><i class="fa fa-clock-o"></i> 1 years ago</small>
                    </td>
                </tr>
                </tbody>
            </table>
            <table class="table forum table-striped">
                <thead>
                <tr>
                    <th class="cell-stat"></th>
                    <th>
                        <h3>Open discussion</h3>
                    </th>
                    <th class="cell-stat text-center hidden-xs hidden-sm">Topics</th>
                    <th class="cell-stat text-center hidden-xs hidden-sm">Posts</th>
                    <th class="cell-stat-2x hidden-xs hidden-sm">Last Post</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td></td>
                    <td colspan="4" class="center">No topics have been added yet.</td>
                </tr>
                </tbody>
            </table>-->
            </div>

    </div>
</section>
