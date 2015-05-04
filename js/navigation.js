/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens.
 */
( function($) {

$(".form-group").click(function() {
            $(this).find(":input").focus()
        }),
        $("body").on("focus", ".form-group :input",
        function() {
            $(".form-group").removeClass("focused"),
            $(this).parents(".form-group").addClass("focused")
        }),
        $("body").on("blur", ".form-group :input",
        function() {
            $(this).parents(".form-group").removeClass("focused"),
            $(this).val() ? $(this).closest(".form-group").find("label").addClass("fade") : $(this).closest(".form-group").find("label").removeClass("fade")
        }),
        $(".form-group .checkbox, .form-group .radio").hover(function() {
            $(this).parents(".form-group").addClass("focused")
        },
        function() {
            $(this).parents(".form-group").removeClass("focused")
        })
} )(window.jQuery);
