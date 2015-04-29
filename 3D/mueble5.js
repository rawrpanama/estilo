var xhr = new XMLHttpRequest();
xhr.onload = function(){
    if(xhr.status === 200){
        document.getElementById('content').innerHTML = xhr.responseText;
    }
};
xhr.open('POST', 'ajax/datos.html', true);
xhr.send(null);