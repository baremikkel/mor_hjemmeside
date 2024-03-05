var xhr = new XMLHttpRequest();
var items = 0;
xhr.open('GET', './php/getReviews.php', true);

xhr.onload = function() {
    if (xhr.status === 200) {
        var data = JSON.parse(xhr.responseText);
        if (data && data.length > 0) {
            var anb = document.getElementById("anbefalinger");
            for (var i = 0; i < data.length; i++) {
              	var div = document.createElement('div');
              	div.classList.add("anb")

                var text = document.createElement('p');
                text.setAttribute("id", "text");
              	text.style.fontFamily = "Times New Roman, serif"
                text.innerHTML = data[i].review_text;

                var author = document.createElement('h3');
                author.innerHTML = data[i].author;
                div.appendChild(text);
                div.appendChild(author);
              	anb.appendChild(div);
              	items++;
            }
        } else {
            console.log("No data found")
        }
    }
};
xhr.send();