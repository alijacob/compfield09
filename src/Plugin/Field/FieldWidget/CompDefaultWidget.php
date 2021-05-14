<?php

namespace Drupal\compfield09\Plugin\Field\FieldWidget;

use Drupal;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'AddressDefaultWidget' widget.
 *
 * @FieldWidget(
 *   id = "CompDefaultWidget",
 *   module = "compfield09",
 *   label = @Translation("Address select"),
 *   field_types = {
 *     "Compound"
 *   }
 * )
 */
class CompDefaultWidget extends WidgetBase {

  /**
   * Define the form for the field type.
   * 
   * Inside this method we can define the form used to edit the field type.
   * 
   * Here there is a list of allowed element types: https://goo.gl/XVd4tA
   */
  public function formElement(
    FieldItemListInterface $items,
    $delta, 
    Array $element, 
    Array &$form, 
    FormStateInterface $formState
  ) {

    // Description

    $element['description'] = [
      '#type' => 'textfield',
      '#title' => t('Description'),

      // Set here the current value for this field, or a default value (or 
      // null) if there is no a value
      '#default_value' => isset($items[$delta]->description) ? 
          $items[$delta]->description : null,

      '#empty_value' => '',
      '#placeholder' => t('Description'),
    ];

    // Sidebar Title

    $element['sidebar_title'] = [
      '#type' => 'textfield',
      '#title' => t('Sidebar Title'),
      '#default_value' => isset($items[$delta]->sidebar_title) ? 
          $items[$delta]->sidebar_title : null,
      '#empty_value' => '',
      '#placeholder' => t('Sidebar Title'),
    ];
        
    //Thumb Url for thumbnail url, the image url only
    
    $element['thumb_url'] = [
      '#type' => 'url',
      '#title' => t('Thumb Url'),
      '#default_value' => isset($items[$delta]->thumb_url) ? 
          $items[$delta]->thumb_url : null,
      '#empty_value' => '',
      '#placeholder' => t('Thumb Url'),
    ];
    
    //Article Url
    
    $element['article_url'] = [
      '#type' => 'url',
      '#title' => t('Article Url'),
      '#default_value' => isset($items[$delta]->article_url) ? 
          $items[$delta]->article_url : null,
      '#empty_value' => '',
      '#placeholder' => t('Article Url'),
    ];    
    
    return $element;
  }

} // class


