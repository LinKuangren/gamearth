<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_fund_fields' );

function crb_attach_fund_fields() {

    # Heroes
    Container::make( 'post_meta', __( 'Fund Presentation', 'gamearth') )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'template-fund.php' )
    ->add_fields( array(
        //Image Hero
        Field::make( 'image', 'crb_fund_section_heroes_image_title', __('Image Title', 'gamearth') ),

        //Subtitle
        Field::make( 'complex', 'crb_fund_section_heroes_subtitle', __('Heroes subtitle', 'gamearth'))
        ->add_fields( array(
            Field::make( 'text', 'paragraph', __('Paragraph', 'gamearth')),
        ))
        ->set_max( 3 )
        ->set_layout( 'tabbed-horizontal' ),

        //2 paragraphes en dessous
        Field::make( 'complex', 'crb_fund_section_heroes_contents', __('Heroes content', 'gamearth'))
        ->add_fields( array(
            Field::make('text', 'paragraph', __('Paragraph', 'gamearth')),
        ))
        ->set_max( 2 )
        ->set_layout( 'tabbed-horizontal' ),

        // //Illustration à gauche
        Field::make( 'image', 'crb_fund_section_heroes_illustration', __('Heroes illustration', 'gamearth') ),

    ));

    Container::make('post_meta', __('Fund Objectives', 'gamearth'))
        ->where('post_type', '=', 'page')
        ->where( 'post_template', '=', 'template-fund.php' )
        ->add_fields(array(
            
            //Bandeau
            Field::make( 'image ', 'crb_fund_section_objectives_title_image', __('Objective Image', 'gamearth')),
            Field::make( 'text ', 'crb_fund_section_objectives_title', __('Objective Title', 'gamearth')),

            //Content à gauche sur fond noir
            Field::make('text', 'crb_fund_section_objectives_left_paragraph', __('Left paragraph content', 'gamearth')),


            //Liste des 3:
            Field::make('complex', 'crb_fund_section_objectives_list', __('Objective list', 'gamearth'))
            ->add_fields( array(
                Field::make('text', 'paragraph', __('Liste', 'gamearth')),
            ))
            ->set_max( 3 )
            ->set_layout( 'tabbed-horizontal' ),


            //Bandeau Illustration
            Field::make('image', 'crb_fund_section_objectives_illustrations', __('Objective illustration bottle', 'gamearth')),

            // //Notre financement
            // Field::make('complex', 'crb_fund_section_objectives_goal', __('Objective goal', 'gamearth'))
            // ->add_fields( array(
            //     Field::make('text', 'paragraph', __('Subtitle1', 'gamearth')),
            //     Field::make('text', 'paragraph', __('Subtitle1', 'gamearth')),
            // ))
            // ->set_max( 1 ),


            //     //Notre conseil...
            // Field::make('complex', 'crb_fund_section_objective_listing', __('Objective second-subtitle', 'gamearth'))
            // ->add_fields( array(
            //     Field::make('text', 'paragraph', __('Sub_1', 'gamearth')),
            //     Field::make('text', 'paragraph', __('Sub_2', 'gamearth')),
            // ))
            // ->set_max( 1 ),

            //Présentation du financement
            Field::make( 'complex', 'crb_fund_section_objective_contents', __('Objective content', 'gamearth') )
            ->add_fields( array(
                Field::make( 'image', 'image', __('Image', 'gamearth') ),
                Field::make( 'text', 'paragraph', __('Paragraph', 'gamearth') ),
            ))
            ->set_max( 3 )
            ->set_layout( 'tabbed-horizontal' ),


            Field::make('text', 'crb_fund_section_fonctionnement_main_title', __('Fonctionnement Titre', 'gamearth')),
            Field::make('complex', 'crb_fund_section_fonctionnement_sub_title', __('Fonctionnement Sous-Titre', 'gamearth'))
            ->add_fields( array(
                Field::make('text', 'paragraph', __('Subtitle', 'gamearth')),
            ))
            ->set_max( 2 )
            ->set_layout( 'tabbed-horizontal' ),

            //Présentation des personnes
            Field::make('complex', 'crb_fund_section_objective_people', __('Objective people', 'gamearth'))
            ->add_fields( array(
                Field::make( 'image', 'image', __('Image', 'gamearth') ),
                Field::make( 'text', 'paragraph', __('Paragraph', 'gamearth') ),
            ))
            ->set_max( 12 )
            ->set_layout( 'tabbed-horizontal' ),

            Field::make('image', 'crb_fund_section_objective_people_illustration', __('Financement Illustration', 'gamearth')),

        ));

    Container::make('post_meta', __('Fund Activities & Projects', 'gamearth'))
        ->where('post_type', '=', 'page')
        ->where( 'post_template', '=', 'template-fund.php' )
        ->add_fields(array(
            //Title
            Field::make('text', 'crb_fund_section_activities_title', __('Activities title','gamearth')),

            Field::make('complex', 'crb_fund_section_activities', __('Activities list', 'gamearth'))
            ->add_fields( array(
                Field::make('image','image', __('Image', 'gamearth')),
                Field::make('date', 'date', __('Date', 'gamearth')),
                Field::make( 'text', 'title', __( 'Title', 'gamearth' ) ),
                Field::make('rich_text', 'rich_text', __('Content', 'gamearth')),
                Field::make('text', 'paragraph', __('Lien', 'gamearth')),
            ))
            ->set_max( 4 )
            ->set_layout( 'tabbed-horizontal' ),
        ));

        Container::make('post_meta', __('Support', 'gamearth'))
            ->where('post_type', '=', 'page')
            ->where( 'post_template', '=', 'template-fund.php' )
            ->add_fields(array(
                Field::make('image', 'crb_fund_support_illustration', __('Illustration Projet 1', 'gamearth')),
                Field::make('text', 'crb_fund_support_title', __('Title projet 1', 'gamearth')),
                Field::make('text', 'crb_fund_support_subtitle', __('Sous-titre projet 1', 'gamearth')),
                Field::make('rich_text', 'crb_fund_support_button', __('Boutton projet 1', 'gamearth')),
            ));

        Container::make('post_meta', __('Siège Social', 'gamearth'))
        ->where('post_type', '=', 'page')
        ->where( 'post_template', '=', 'template-fund.php' )
        ->add_fields(array(
            Field::make('image', 'crb_fund_headquarters_illustration', __('Illustration Projet 2', 'gamearth')),
            Field::make('text', 'crb_fund_headquarters_title', __('Title projet 2', 'gamearth')),
            Field::make('text', 'crb_fund_headquarters_subtitle', __('Sous-titre projet 2', 'gamearth')),
            Field::make('rich_text', 'crb_fund_headquarters_button', __('Boutton projet 2', 'gamearth')),
        ));
}