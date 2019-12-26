/**
 * @file
 * Provides base widget behaviours.
 */

(function ($, Drupal) {

  'use strict';

  /**
   * Handles "facets_filter" event and triggers "facets_filtering".
   *
   * The facets module will listend and trigger defined events on elements with
   * class: "js-facets-widget".
   *
   * Events are doing following:
   * "facets_filter" - widget should trigger this event. The facets module will
   *   handle it accordingly in case of AJAX and Non-AJAX views.
   * "facets_filtering" - The facets module will trigger this event before
   *   filter is executed.
   *
   * This is an example how to trigger "facets_filter" event for your widget:
   *   $('.my-custom-widget.js-facets-widget')
   *     .once('my-custom-widget-on-change')
   *     .on('change', function () {
   *       // In this example $(this).val() will provide needed URL.
   *       $(this).trigger('facets_filter', [ $(this).val() ]);
   *     });
   *
   * The facets module will trigger "facets_filtering" before filter is
   * executed. Widgets can listen on "facets_filtering" event and react before
   * filter is executed. Most common use case is to disable widget. When you
   * disable widget, a user will not be able to trigger new "facets_filter"
   * event before initial filter request is finished.
   *
   * This is an example how to handle "facets_filtering":
   *   $('.my-custom-widget.js-facets-widget')
   *     .once('my-custom-widget-on-facets-filtering')
   *     .on('facets_filtering.my_widget_module', function () {
   *       // Let's say, that widget can be simply disabled (fe. select).
   *       $(this).prop('disabled', true);
   *     });
   *
   * You should namespace events for your module widgets. With namespaced events
   * you have better control on your handlers and if it's needed, you can easier
   * register/deregister them.
   */
  Drupal.behaviors.facetsFilter = {
    attach: function (context) {
      $('.js-facets-widget', context)
        .once('js-facet-filter')
        .on('facets_filter.facets', function (event, url) {
          $('.js-facets-widget').trigger('facets_filtering');

          window.location = url;
        });
    }
  };

})(jQuery, Drupal);
;
/**
 * @file
 * Transforms links into a dropdown list.
 */

(function ($) {

  'use strict';

  Drupal.facets = Drupal.facets || {};
  Drupal.behaviors.facetsDropdownWidget = {
    attach: function (context, settings) {
      Drupal.facets.makeDropdown(context, settings);
    }
  };

  /**
   * Turns all facet links into a dropdown with options for every link.
   *
   * @param {object} context
   *   Context.
   * @param {object} settings
   *   Settings.
   */
  Drupal.facets.makeDropdown = function (context, settings) {
    // Find all dropdown facet links and turn them into an option.
    $('.js-facets-dropdown-links').once('facets-dropdown-transform').each(function () {
      var $ul = $(this);
      var $links = $ul.find('.facet-item a');
      var $dropdown = $('<select />');
      // Preserve all attributes of the list.
      $ul.each(function() {
        $.each(this.attributes,function(idx, elem) {
            $dropdown.attr(elem.name, elem.value);
        });
      });
      // Remove the class which we are using for .once().
      $dropdown.removeClass('js-facets-dropdown-links');

      $dropdown.addClass('facets-dropdown');
      $dropdown.addClass('js-facets-widget');
      $dropdown.addClass('js-facets-dropdown');

      var id = $(this).data('drupal-facet-id');
      // Add aria-labelledby attribute to reference label.
      $dropdown.attr('aria-labelledby', "facet_"+id+"_label");
      var default_option_label = settings.facets.dropdown_widget[id]['facet-default-option-label'];

      // Add empty text option first.
      var $default_option = $('<option />')
        .attr('value', '')
        .text(default_option_label);
      $dropdown.append($default_option);

      $ul.prepend('<li class="default-option"><a href=".">' + default_option_label + '</a></li>');

      var has_active = false;
      $links.each(function () {
        var $link = $(this);
        var active = $link.hasClass('is-active');
        var $option = $('<option />')
          .attr('value', $link.attr('href'))
          .data($link.data());
        if (active) {
          has_active = true;
          // Set empty text value to this link to unselect facet.
          $default_option.attr('value', $link.attr('href'));
          $ul.find('.default-option a').attr("href", $link.attr('href'));
          $option.attr('selected', 'selected');
          $link.find('.js-facet-deactivate').remove();
        }
        $option.text($link.text());
        $dropdown.append($option);
      });

      // Go to the selected option when it's clicked.
      $dropdown.on('change.facets', function () {
        var anchor = $($ul).find("[data-drupal-facet-item-id='" + $(this).find(':selected').data('drupalFacetItemId') + "']");
        var $linkElement = (anchor.length > 0) ? $(anchor) : $ul.find('.default-option a');
        var url = $linkElement.attr('href');

        $(this).trigger('facets_filter', [ url ]);
      });

      // Append empty text option.
      if (!has_active) {
        $default_option.attr('selected', 'selected');
      }

      // Replace links with dropdown.
      $ul.after($dropdown).hide();
      Drupal.attachBehaviors($dropdown.parent()[0], Drupal.settings);
    });
  };

})(jQuery);
;
