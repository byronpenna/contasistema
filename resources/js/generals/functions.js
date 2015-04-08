function cargarObjetoGeneral(urlAjax,frm,callBack) {
    $.ajax({
        url: urlAjax,
        type: 'POST',
        data: {
            form: JSON.stringify(frm)
        },
        success: function (data) {
            callBack(data);
        }
    });
}
function serializeToJson(a) {
    var o = {};
    $.each(a, function () {
        if (o[this.name]) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
}