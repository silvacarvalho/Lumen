$(function () {
    $("[data-toggle='tooltip']").tooltip();

    var NonoDigitoTelefone = function (val) {
            return val.replace(/\D/g, '').length === 13 ? '+55 (00) 00000 0000' : '+55 (00) 0000 00009';
        },
        nonoDigitoOptions = {
            onKeyPress: function(val, e, field, options) {
                field.mask(NonoDigitoTelefone.apply({}, arguments), options);
            }
        };
    $('#telefone').mask(NonoDigitoTelefone, nonoDigitoOptions);
})