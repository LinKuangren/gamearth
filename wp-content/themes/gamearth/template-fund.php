<?php
/**
 * Template Name: Fund Template
 */

$fund_section_heroes_image_title = carbon_get_the_post_meta('crb_fund_section_heroes_image_title');
$fund_section_heroes_contents = carbon_get_the_post_meta('crb_fund_section_heroes_contents');
$fund_section_heroes_subtitle = carbon_get_the_post_meta('crb_fund_section_heroes_subtitle');
$fund_section_heroes_illustration = carbon_get_the_post_meta('crb_fund_section_heroes_illustration');
$fund_section_objectives_title_image = carbon_get_the_post_meta('crb_fund_section_objectives_title_image');
$fund_section_objectives_title = carbon_get_the_post_meta('crb_fund_section_objectives_title');
$fund_section_objectives_left_paragraph = carbon_get_the_post_meta('crb_fund_section_objectives_left_paragraph');
$fund_section_objectives_list = carbon_get_the_post_meta('crb_fund_section_objectives_list');
$fund_section_banner_illustration = carbon_get_the_post_meta('crb_fund_section_objectives_illustrations');
$fund_section_fonctionnement_main_title = carbon_get_the_post_meta('crb_fund_section_fonctionnement_main_title');
$fund_section_fonctionnement_sub_title = carbon_get_the_post_meta('crb_fund_section_fonctionnement_sub_title');
$fund_section_objective_listing = carbon_get_the_post_meta('crb_fund_section_objectives_list');
$fund_section_objective_contents = carbon_get_the_post_meta('crb_fund_section_objective_contents');
$fund_section_objective_people = carbon_get_the_post_meta('crb_fund_section_objective_people');
$fund_section_objective_people_illustration = carbon_get_the_post_meta('crb_fund_section_objective_people_illustration');
$fund_section_activities = carbon_get_the_post_meta('crb_fund_section_activities');
$fund_section_activities_title = carbon_get_the_post_meta('crb_fund_section_activities_title');
$fund_section_project1 = carbon_get_the_post_meta('crb_fund_section_project1');

$crb_fund_support_illustration = carbon_get_the_post_meta('crb_fund_support_illustration');
$crb_fund_support_title = carbon_get_the_post_meta('crb_fund_support_title');
$crb_fund_support_subtitle = carbon_get_the_post_meta('crb_fund_support_subtitle');
$crb_fund_support_button = carbon_get_the_post_meta('crb_fund_support_button');

$crb_fund_headquarters_illustration = carbon_get_the_post_meta('crb_fund_headquarters_illustration');
$crb_fund_headquarters_title = carbon_get_the_post_meta('crb_fund_headquarters_title');
$crb_fund_headquarters_subtitle = carbon_get_the_post_meta('crb_fund_headquarters_subtitle');
$crb_fund_headquarters_button = carbon_get_the_post_meta('crb_fund_headquarters_button');
/*
# Heroes
'crb_fund_section_heroes_image_title'
'crb_fund_section_objective_contents'
'image'
'paragraph'
*/

?>

<div class='heroes-container'>

    <div class="heroes-left-illustration">
        <?= wp_get_attachment_image($fund_section_heroes_illustration, 'custom_size_fund_section_heroes_illustration', "", array("class" => "lazyload img-fluid")) ?>
    </div>

    <div class="heroes-content">
        <div class="heroes-main-text">

            <div class="heroes-title">
                <?= wp_get_attachment_image($fund_section_heroes_image_title, 'custom_size_fund_section_heroes_illustration', "", array("class" => "lazyload img-fluid")) ?>
            </div>

            <ul class="heroes-child-subtitle">
                <?php foreach ($fund_section_heroes_subtitle as $content) { ?>
                    <li class="heroes-child-subtitle-list">
                        <?= $content['paragraph'] ?>
                    </li>
                <?php } ?>
            </ul>

        </div>

        <div class="heroes-paragraph">
            <?php foreach ($fund_section_heroes_contents as $content) { ?>
                <p class="heroes-child-paragraph">
                    <?= $content['paragraph'] ?>
                </p>
                <div class="heroes-child-separator"></div>
            <?php } ?>
        </div>

    </div>

</div>

<div class="objectives-heroes">
    <?= wp_get_attachment_image($fund_section_objectives_title_image, 'custom_size_objective_banner', "", array("class" => "lazyload img-fluid")) ?>

    <p class="objectives-title"> <?= $fund_section_objectives_title ?> </p>
</div>

<!--
    section#objectives-list
      div.objectives-header
        div.objectives-left-paragraph
          p
      div.objectives-contenido
        div.objectives-left-paragraph-block-container
          div.objectives-left-paragraph-block
        div.objectives-list
          div.objectives-number
            span.objective1
            span.objective2
            span.objective3
          div.objectives-content
            <p class="objective-list-content">
-->
<section id="objectives-list">
    <div class="objectives-header">
        <div class="objectives-left-paragraph">
            <p> <?= $fund_section_objectives_left_paragraph ?> </p>
        </div>
    </div>

    <div class="objectives-contenido">
        <div class="objectives-left-paragraph-block-container">
            <div class="objectives-left-paragraph-block"></div>
            <div class="objectives-left-paragraph-block"></div>  
            <div class="objectives-left-paragraph-block"></div>
        </div>

        <div class="objectives-list">
            <div class="objectives-number">
                <span class="objective1">1</span>
                <span class="objective2">2</span>
                <span class="objective3">3</span>
            </div>
           
            <div class="objectives-content">
                <?php foreach ($fund_section_objective_listing as $content) { ?>
                    <p class="objective-list-content">
                        <?= $content['paragraph'] ?>
                    </p>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<div class="objectives-illustration">
    <?= wp_get_attachment_image($fund_section_banner_illustration, 'custom_size_fund_objectives_bottle',    "", array("class" => "lazyload img-fluid")) ?>
</div>

<div class="fonctionnement-container">

  <div class="fonctionnement-title">
    <p class="title-content"><b style="width: 100%; font-weight: 600; font-size: 150px; display: block;"><?php echo  $fund_section_fonctionnement_main_title ?></b>

    <div class="subtitle-wrapper">
    <?php foreach($fund_section_fonctionnement_sub_title as $content){ ?>
        <p class="fonctionnement-subtitle-child"><?= $content['paragraph'] ?></p>
    <?php } ?>
    </div>

    </div>


  <div class="financement">
        <?php foreach ($fund_section_objective_contents as $content) { ?>
            <div class="financement-child">
                <?= wp_get_attachment_image($content['image'], 'custom_size_fund_objectives_bottle', "", array("class" => "lazyload img-fluid")) ?>
                <p class="financement-list-content"><?= $content['paragraph'] ?></p>
            </div>
        <?php } ?>
  </div>

  <div class="conseil-administration-wrapper">
    <div class="conseil-administration">
        <?php foreach ($fund_section_objective_people as $content) { ?>

            <div class="profile">
            <?= wp_get_attachment_image($content['image'], 'custom_size_fund_objectives_bottle',    "", array("class" => "lazyload img-fluid profile-picture")) ?>
            
            <p class="conseil-content">
                <?= $content['paragraph'] ?>
            </p>
            </div>
        <?php } ?>
    </div>



  </div>
</div>

<div class="financement-illustration">
        <?= wp_get_attachment_image($fund_section_objective_people_illustration, 'custom_size_fund_objectives_bottle',    "", array("class" => "lazyload img-fluid")) ?>
</div>


<div class="activities-wrapper">

    <p class="activities-title"><?php echo $fund_section_activities_title ?></p>

    <div class="activities-blocks">

        <?php foreach ($fund_section_activities as $content) { ?>

                <div class="blocks">

                <?= wp_get_attachment_image($content['image'], 'custom_size_fund_objectives_bottle',    "", array("class" => "lazyload img-fluid article-image")) ?>

                <p class="article-date"><?= $content['date'] ?> </p>

                <p class="financement-list-title">
                    <?= $content['title'] ?>
                </p>

                <p class="financement-list-content">
                    <?= $content['rich_text'] ?>
                </p>


                <a class="financement-list-link" href="<?= $content['paragraph'] ?>">
                    En savoir plus
                </a>

            </div>
            <?php } ?>
        
    </div>

</div>

<div class="projects-wrapper">
    <div class="support-wrapper">
        <?= wp_get_attachment_image($crb_fund_support_illustration,    'custom_size_fund_objectives_bottle',    "", array("class" => "lazyload img-fluid article-image")) ?>

        <div class="support-content">
            <p class="support-title"><?= $crb_fund_support_title ?></p>
            <p class="support-subtitle"><?= $crb_fund_support_subtitle ?> </p>
            <p class="support-button"><?= $crb_fund_support_button ?></p>
        </div>
        
    </div>

    <div class="headquarters-wrapper">
        <div class="headquarters-content">
            <p class="headquarters-title"><?= $crb_fund_headquarters_title ?></p>
            <p class="headquarters-subtitle"><?= $crb_fund_headquarters_subtitle ?> </p>
            <p class="headquarters-button"><?= $crb_fund_headquarters_button ?></p>
        </div>
        <?= wp_get_attachment_image($crb_fund_headquarters_illustration,    'custom_size_fund_objectives_bottle',    "", array("class" => "lazyload img-fluid article-image")) ?>
    </div>
</div>