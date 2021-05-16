$( document ).ready(function() {
    var $categorie = $('#article_api_categorie');
    console.log($categorie);
    // ... retrieve the corresponding form.
    var $form = $('#form_api');
    // Simulate form data, but only include the selected categorie value.
    var data = {};
    data[$categorie.attr('name')] = $categorie.val();

    console.log(data);
    // Submit data via AJAX to the form's action path.
    $.ajax({
        url : $form.attr('action'),
        type: $form.attr('method'),
        data : data,
        success: function(html) {
            // Replace current genre field ...
            $('#article_api_genre').replaceWith(
                // ... with the returned one from the AJAX response.
                $(html).find('#article_api_genre')
            );
            // Genre field now displays the appropriate genres.
            // Replace current genre field ...
            $('#article_api_rubriques').replaceWith(
                // ... with the returned one from the AJAX response.
                $(html).find('#article_api_rubriques')
            );
            // Genre field now displays the appropriate genres.
        }
    });
});




// update genres et rubriques selon la categorie
// ============================
var $categorie = $('#article_api_categorie');
// When categorie gets selected ...
$categorie.change(function() {
    // ... retrieve the corresponding form.
    var $form = $(this).closest('form');
    // Simulate form data, but only include the selected categorie value.
    var data = {};
    data[$categorie.attr('name')] = $categorie.val();
    // Submit data via AJAX to the form's action path.
    $.ajax({
        url : $form.attr('action'),
        type: $form.attr('method'),
        data : data,
        success: function(html) {
            // Replace current genre field ...
            $('#article_api_genre').replaceWith(
              // ... with the returned one from the AJAX response.
              $(html).find('#article_api_genre')
            );
            // Genre field now displays the appropriate genres.
            // Replace current genre field ...
            $('#article_api_rubriques').replaceWith(
              // ... with the returned one from the AJAX response.
              $(html).find('#article_api_rubriques')
            );
            // Genre field now displays the appropriate genres.
        }
    });
});


