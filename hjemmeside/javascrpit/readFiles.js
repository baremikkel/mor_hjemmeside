function readTextFile(file, id) {
    fetch(file)
        .then(response => response.text())
        .then(text => {
            for(var i = 0; i < text.length; i++)
            document.getElementById(id).innerHTML += text[i].replace('\n', "<br>")
        })
}