// Ajax
    function cargarObjetoGeneral(urlAjax,frm,callBack,loader,img) {
        $.ajax({
            url: urlAjax,
            type: 'POST',
            data: {
                form: JSON.stringify(frm)
            },
            beforeSend: function(){
                if(loader !== undefined && loader !== null){
                    console.log(urlImgGif);
                    loader.empty().append(img);
                }
            },
            success: function (data) {
                callBack(data);
            }
        });
    }
// JSON 
    function serializeSection(section) {
        var frm = serializeToJson(section.find("input,select,textarea").serializeArray());
        return frm;
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