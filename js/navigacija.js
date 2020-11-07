$(function(){
    $('header nav > a').click(function(e){
        pakeistiTaba($(this).attr('href'));
        priskirtiKlase('active', this);
        e.preventDefault()
    });

    function pakeistiTaba (id) {
        $('main > section').hide();
        $(id).show();
    }

    function priskirtiKlase(klasesvardas, el){
        $('header nav > a').removeClass(klasesvardas);
        $(el).addClass(klasesvardas);
    }

    pakeistiTaba('#contacts');
});