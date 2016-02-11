<?php

use yii\widgets\ListView;

?>



<!--<section id="nicdark_parallax_title" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img-single-teacher-1">

    <div class="nicdark_filter greydark">

        <div class="nicdark_container nicdark_clearfix">

            <div class="grid grid_12">
                <div class="nicdark_space100"></div>
                <div class="nicdark_space100"></div>
                <h1 class="white subtitle">JULIETTE LIGHT</h1>
                <div class="nicdark_space10"></div>
                <h3 class="subtitle white">KNOW JULIE OUR ART TEACHER</h3>
                <div class="nicdark_space20"></div>
                <div class="nicdark_divider left big"><span class="nicdark_bg_white nicdark_radius"></span></div>
                <div class="nicdark_space40"></div>
                <div class="nicdark_space50"></div>
            </div>

        </div>

    </div>

</section>-->

<div class="nicdark_space50"></div>

<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_space70"></div>

        <div class="grid grid_12">
            <div class="nicdark_textevidence nicdark_bg_orange nicdark_radius nicdark_shadow">
                <div class="nicdark_size_big">
                    <p class="white"><i class="icon-calendar-1 nicdark_marginright10"></i><?= $model['created_at'] ?>
                        <span
                            class="nicdark_margin010">·</span> <i class="icon-user-1 nicdark_marginright10"></i>
                        <?= Yii::$app->user->identity['username'] ?>
                        <span class="nicdark_margin010">·</span> <i class="icon-chat nicdark_marginright10"></i>3
                        COMMENTS</p>
                </div>
                <i class="icon-info-outline nicdark_iconbg right medium white"></i>
            </div>
            <div class="nicdark_space20"></div>


            <div class="nicdark_space20"></div>

            <h1 class="subtitle greydark"><?= $model['title'] ?></h1>

            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left small"><span class="nicdark_bg_yellow nicdark_radius"></span></div>
            <div class="nicdark_space20"></div>

            <div class="article-text">
                <?= $model['text'] ?>
            </div>
            <div class="nicdark_space50"></div>

            <!--author-->
            <div class="nicdark_archive1 nicdark_bg_yellow nicdark_radius nicdark_shadow">
                <div class="nicdark_margin20 nicdark_relative">

                    <img alt="" class="nicdark_displaynone_ipadpotr nicdark_radius_circle nicdark_absolute"
                         style="width:100px;" src="../img/team/img1.jpg">

                    <div class="nicdark_activity nicdark_marginleft120 nicdark_disable_marginleft_ipadpotr">
                        <h4 class="white">JOHN MCALISTER</h4>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span>
                        </div>
                        <div class="nicdark_space20"></div>
                        <p class="white">Lorem commodo lectus at sollicitudin elementum. Sed dolor turpis, condimentum
                            sit amet maximus sit amet, rhoncus non turpis. Aenean convallis ac lorem et sodales.</p>
                    </div>

                </div>
            </div>
            <!--author-->

            <div class="nicdark_space50"></div>

            <h3 class="subtitle greydark">3 COMMENTS</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left small"><span class="nicdark_bg_orange nicdark_radius"></span></div>
            <div class="nicdark_space20"></div>

            <ul class="nicdark_list border">

                <li class="nicdark_border_grey">
                    <!--comment-->
                    <div class="nicdark_archive1 nicdark_relative">
                        <div class="nicdark_margin100 nicdark_relative">
                            <img alt="" class="nicdark_displaynone_ipadpotr nicdark_radius_circle nicdark_absolute"
                                 style="width:50px;" src="../img/team/img2.jpg">
                            <div class="nicdark_activity nicdark_marginleft70 nicdark_disable_marginleft_ipadpotr">
                                <div class="nicdark_space20"></div>
                                <h4 class="subtitle greydark">ADMIN SAYS: May 12, 2014 AT 1:19</h4>
                                <div class="nicdark_space20"></div>
                            </div>
                        </div>
                        <p>Lorem commodo lectus at sollicitudin elementum. Sed dolor turpis, condimentum sit amet
                            maximus sit amet, rhoncus non turpis. Aenean convallis ac lorem et sodales. Lorem commodo
                            lectus at sollicitudin elementum. Sed dolor turpis, condimentum sit amet maximus sit amet,
                            rhoncus non turpis. Aenean convallis ac lorem.</p>
                        <div class="nicdark_space20"></div>
                        <a href="#" class="nicdark_btn nicdark_bg_orange small nicdark_shadow nicdark_radius white"><i
                                class="icon-reply-outline"></i>&nbsp;&nbsp;&nbsp;REPLY</a>
                        <div class="nicdark_space20"></div>
                    </div>
                    <!--comment-->
                </li>

                <li class="nicdark_border_grey">
                    <!--comment-->
                    <div class="nicdark_archive1 nicdark_relative">
                        <div class="nicdark_margin100 nicdark_relative">
                            <img alt="" class="nicdark_displaynone_ipadpotr nicdark_radius_circle nicdark_absolute"
                                 style="width:50px;" src="../img/team/img3.jpg">
                            <div class="nicdark_activity nicdark_marginleft70 nicdark_disable_marginleft_ipadpotr">
                                <div class="nicdark_space20"></div>
                                <h4 class="subtitle greydark">ADMIN SAYS: May 12, 2014 AT 1:19</h4>
                                <div class="nicdark_space20"></div>
                            </div>
                        </div>
                        <p>Lorem commodo lectus at sollicitudin elementum. Sed dolor turpis, condimentum sit amet
                            maximus sit amet, rhoncus non turpis. Aenean convallis ac lorem et sodales. Lorem commodo
                            lectus at sollicitudin elementum. Sed dolor turpis, condimentum sit amet maximus sit amet,
                            rhoncus non turpis. Aenean convallis ac lorem.</p>
                        <div class="nicdark_space20"></div>
                        <a href="#" class="nicdark_btn nicdark_bg_orange small nicdark_shadow nicdark_radius white"><i
                                class="icon-reply-outline"></i>&nbsp;&nbsp;&nbsp;REPLY</a>
                        <div class="nicdark_space20"></div>
                    </div>
                    <!--comment-->
                </li>


                <li class="nicdark_border_grey">
                    <!--comment-->
                    <div class="nicdark_archive1 nicdark_relative">
                        <div class="nicdark_margin100 nicdark_relative">
                            <img alt="" class="nicdark_displaynone_ipadpotr nicdark_radius_circle nicdark_absolute"
                                 style="width:50px;" src="../img/team/img4.jpg">
                            <div class="nicdark_activity nicdark_marginleft70 nicdark_disable_marginleft_ipadpotr">
                                <div class="nicdark_space20"></div>
                                <h4 class="subtitle greydark">ADMIN SAYS: May 12, 2014 AT 1:19</h4>
                                <div class="nicdark_space20"></div>
                            </div>
                        </div>
                        <p>Lorem commodo lectus at sollicitudin elementum. Sed dolor turpis, condimentum sit amet
                            maximus sit amet, rhoncus non turpis. Aenean convallis ac lorem et sodales. Lorem commodo
                            lectus at sollicitudin elementum. Sed dolor turpis, condimentum sit amet maximus sit amet,
                            rhoncus non turpis. Aenean convallis ac lorem.</p>
                        <div class="nicdark_space20"></div>
                        <a href="#" class="nicdark_btn nicdark_bg_orange small nicdark_shadow nicdark_radius white"><i
                                class="icon-reply-outline"></i>&nbsp;&nbsp;&nbsp;REPLY</a>
                        <div class="nicdark_space5"></div>
                    </div>
                    <!--comment-->
                </li>

            </ul>


            <div class="nicdark_space50"></div>

            <h3 class="subtitle greydark">Оставить комментарий</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left small"><span class="nicdark_bg_red nicdark_radius"></span></div>
            <div class="nicdark_space20"></div>

            <textarea class="nicdark_bg_grey nicdark_radius nicdark_shadow grey small subtitle" placeholder="COMMENTS"
                      rows="9"></textarea>
            <div class="nicdark_space20"></div>
            <input class="nicdark_btn nicdark_bg_red medium nicdark_shadow nicdark_radius white left" type="submit"
                   value="POST COMMENT">


        </div>

        <div class="nicdark_space50"></div>

    </div>
    <!--end nicdark_container-->

</section>