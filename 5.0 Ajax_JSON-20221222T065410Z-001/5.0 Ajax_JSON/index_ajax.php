<ul>
    <li><a onclick="makeRequest(this)" data-value="" href="#">All</a></li>
    <li><a onclick="makeRequest(this)" data-value="author 1" href="#">Author 1</a></li>
    <li><a onclick="makeRequest(this)" href="#" data-value="author 2">Author 2</a></li>
</ul>

<div id='results'></div>
<script>
    function makeRequest(element){
        console.log(element.getAttribute('data-value'));
        let request_string = element.getAttribute('data-value');
        let request = "xhr.php";
        if(request_string !== "")
            request = request+"?value="+request_string;

        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", request, true);
        xhttp.send();

        xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var response = JSON.parse(this.responseText);
            console.log(response);
            let html = "";
            for(obj in response){
                html += "<p>"+obj + " -- "+response[obj]+"</p>";
            }
            document.getElementById("results").innerHTML = html;
       }
    };
    }
</script>