// entite subform
// ============================
jQuery(document).ready(function() {
    // Get the div that holds the collection of tags
    var $entitesCollectionHolder = $('div.entites');

    // add a delete link to all of the existing entite form
    $entitesCollectionHolder.find('div.entite-subform').each(function() {
        addTagFormDeleteLink($(this));
    });

    // count the current form inputs we have (e.g. 2), use that as the new
    // index when inserting a new item (e.g. 2)
    $entitesCollectionHolder.data('index', $entitesCollectionHolder.find('input').length);

    $('body').on('click', '.add_item_link', function(e) {
        var $collectionHolderClass = $(e.currentTarget).data('collectionHolderClass');
        addFormToCollection($collectionHolderClass);
    })
});

function addFormToCollection($collectionHolderClass) {
    // Get the div that holds the collection of tags
    var $collectionHolder = $('.' + $collectionHolderClass);

    // Get the data-prototype
    var prototype = $collectionHolder.data('prototype');

    // get the new index
    var index = $collectionHolder.data('index');

    var newForm = prototype;

    // Replace '__name__label__' in the prototype's HTML to
    // instead be a number based on how many items we have
    newForm = newForm.replace(/__name__label__/g, index);

    // Replace '__name__' in the prototype's HTML to
    // instead be a number based on how many items we have
    newForm = newForm.replace(/__name__/g, index);

    // increase the index with one for the next item
    $collectionHolder.data('index', index + 1);

    // Display the form in the page before the "Add a tag" link
    var $newForm = $('<div class="entite-subform"></div>').append(newForm);

    // add a delete link to the new form
    addTagFormDeleteLink($newForm);

    // Add the new form at the end of the list
    $collectionHolder.append($newForm)
}

function addTagFormDeleteLink($tagForm) {
    var $removeFormButton = $('<div class="col-sm-1">\n' +
        '                <button type="button" class="remove_item_link mt-lg-3 mt-sm-5">x</button>\n' +
        '            </div>');
    $tagForm.find('div.row').append($removeFormButton);

    $removeFormButton.on('click', function(e) {
        // remove the form
        $tagForm.remove();
    });
}



// update genres et rubriques selon la categorie
// ============================
var $categorie = $('#article_categorie');
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
            $('#article_genre').replaceWith(
                // ... with the returned one from the AJAX response.
                $(html).find('#article_genre')
            );
            // Genre field now displays the appropriate genres.
            // Replace current genre field ...
            $('#article_rubriques').replaceWith(
                // ... with the returned one from the AJAX response.
                $(html).find('#article_rubriques')
            );
            // Genre field now displays the appropriate genres.
        }
    });
});


// vignette preview
function vignettePreview() {
    let img = document.getElementById("article_vignette_preview");
    let vignette = document.getElementById('article_vignette');

    if (img == null) { img = document.createElement("img"); }
    img.src = vignette.value;
    img.alt = "Preview de la vignette";
    img.id = "article_vignette_preview";
    img.width = 120;
    img.height = 150;
    img.title = "120x150px, visualisation à la taille dans le liste des articles"
    vignette.parentElement.appendChild(img);
}