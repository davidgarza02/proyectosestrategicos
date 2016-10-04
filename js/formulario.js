$(document).ready(function(){
    var wgcount = 0;
    $('#adddireccionbutton').click(function(){
        wgcount++;
        $.ajax({
            url: "/../index.php/formulario/addgroupfield",
            type: "get", //send it through get method
            data:{count:wgcount},
            cache: false
        })
            .done(function( html ) {
                $('#workgroupcontainer').append(html);
            });
    });
    $('#correotitular').autocomplete({
        source:"/../index.php/formulario/accorreo"
    });
    $('#nombretitular').autocomplete({
        source:"/../index.php/formulario/acnombre"
    });
    $('#cargotitular').autocomplete({
        source:"/../index.php/formulario/accargo"
    });
    $('#apellidopaternotitular').autocomplete({
        source:"/../index.php/formulario/autocompleteapaterno"
    });
    $('#apellidomaternotitular').autocomplete({
        source:"/../index.php/formulario/autocompleteamaterno"
    });
});